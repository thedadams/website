<script lang="ts" setup>
import Centered from "../components/Centered.vue"
import {Blog, Display, Post} from "../ts/blog"
import {reactive} from "vue"

let urlParams = new URLSearchParams(window.location.search)
let sections = urlParams.get("post")?.split("-")
let post: Post
const blog = reactive(new Blog("https://raw.githubusercontent.com/thedadams/blogposts/main/", "Posts.json", "PostTags.json"))
blog.getAndBuildPreview()
if (sections) {
	blog.updateDisplayedPost("", sections[0], sections[1], sections[2])
}

const host = window.location.protocol + "//" + window.location.host

function onClick(event: Event) {
	const e = (event.target as HTMLAnchorElement).parentElement as HTMLLIElement
	for (let l = e.nextElementSibling as HTMLUListElement; l; l = l.nextElementSibling as HTMLUListElement) {
		l.hidden = !l.hidden
		if (l.hidden) {
			l.parentElement?.classList.replace("expanded", "collapsed")
			for (let child of l.children) {
				const c = child as HTMLLIElement
				if (!(c.nextElementSibling as HTMLUListElement)?.hidden) {
					let child = c.firstElementChild as HTMLParagraphElement
					if (!child.className.endsWith("no-click")) child.click()
				}
			}
		} else {
			l.parentElement?.classList.replace("collapsed", "expanded")
		}
	}
}

function dateFromString(s: string): string {
	console.log(s)
	let sections = s.split("-")
	if (sections) return `${sections[1].substring(2)} ${sections[2]}, ${sections[0]}`
	return ""
}
</script>

<template>
	<Centered gap>
		<div class="grid grid-cols-1 md:grid-cols-5 md:gap-16">
			<div :class="{'order-last': !blog.hasDisplayPost()}" class="md:order-first md:col-span-4">
				<section v-if="blog.displayType === Display.Posts">
					<div v-if="blog.hasDisplayPost()">
						<div v-if="blog.getDisplayedPost()?.errorOccurred()">
							<!-- Bad post query string -->
							<div class="text-center">
								<div class="mb-3">
									<p>There was an error getting the post you are trying to access.</p>
								</div>
								<div>
									<a class="j-link no-underline px-3 sm:px-6 py-2 sm:py-3 font-semibold text-white bg-orange-400 rounded-md hover:text-black"
									   @click="blog.displayRecentPosts()">Back
										to the blog</a>
								</div>
							</div>
						</div>
						<div v-else>
							<p class="j-link text-orange-400" @click="blog.back()">« Back</p>
							<h1 class="text-blue-400"><a :href="blog.getDisplayedPost()?.getLink(host)"
														 class="no-underline">{{
									blog.getDisplayedPost().title
								}}</a>
							</h1>
							<p class="text-xs mb-2">Posted on {{ blog.getDisplayedPost().created }}</p>
							<div v-html="blog.getDisplayedPost()?.body"></div>
							<div class="flex flex-row mt-2">
								<p class="mr-1">Tags:</p>
								<p v-for="tag in blog.getDisplayedPost()?.tags" class="mr-2 capitalize j-link"
								   @click="blog.displayTagArchive(tag)">
									{{ tag }}</p>
							</div>
							<p class="text-xs mt-3">Updated on {{ blog.getDisplayedPost().updated }}</p>
							<p class="j-link text-orange-400 mt-6" @click="blog.back()">« Back</p>
						</div>
					</div>
					<div v-else>
						<div v-if="blog.archive.errorOccurred()">
							<!-- Bad post query string -->
							<div class="text-center">
								<div class="mb-3">
									<p>There was an error getting the blog preview</p>
								</div>
								<div>
									<a class="no-underline px-3 sm:px-6 py-2 sm:py-3 font-semibold text-white bg-orange-400 rounded-md hover:text-black"
									   href="/blog.html">Try
										again</a>
								</div>
							</div>
						</div>
						<div v-else>
							<h1>Recent Posts</h1>
							<div class="divide-y divide-orange-400">
								<div v-for="title in blog.previewTitles" class="py-6">
									<div v-if="blog.posts.has(title)">
										<h2 class="j-link text-blue-400 no-underline"
											@click="blog.updateDisplayedPost(title, blog.posts.get(title)?.year,blog.posts.get(title)?.month,blog.posts.get(title)?.day)">
											{{ title }}</h2>
										<p class="text-xs mb-2">Posted on {{ blog.posts.get(title).created }}</p>
										<div
											v-html="blog.posts.get(title)?.body?.split('\n').splice(0, 3).join('\n')"></div>
										<p class="j-link"
										   @click="blog.updateDisplayedPost(title, blog.posts.get(title)?.year,blog.posts.get(title)?.month,blog.posts.get(title)?.day)">
											Read more...</p>
										<p class="text-xs mt-5">Updated on {{ blog.posts.get(title).updated }}</p>
									</div>
								</div>
							</div>
						</div>
						<div class="grid grid-cols-2 justify-items-start">
							<div>
								<p v-if="blog.postPreviewCanGoBack() " class="j-link"
								   @click="blog.buildNextPreview(false)">« Newer</p>
							</div>
							<div class="justify-self-end">
								<p v-if="blog.postPreviewCanGoForward()" class="j-link"
								   @click="blog.buildNextPreview(true)">Older »</p>
							</div>
						</div>
					</div>
				</section>
				<section v-if="blog.displayType === Display.Tags">
					<div v-if="blog.hasDisplayTag()">
						<p class="j-link text-orange-400 mb-3" @click="blog.back()">« Back</p>
						<h2>Posts tagged with <span class="capitalize">"{{ blog.getDisplayTag() }}"</span></h2>
						<hr class="border-blue-400 mb-3">
						<p v-for="k of blog.tags.getPostsWithTag(blog.getDisplayTag())" class="mb-2">
							{{ dateFromString(k[1]) }} -
							<span class="j-link"
								  @click="blog.updateDisplayedPost(k[0], k[1].substring(0, 4), k[1].substring(5, 10), k[1].substring(11))">
								{{ k[0] }}</span></p>
					</div>
					<div v-else>
						<h1 class="text-blue-400">Tags</h1>
						<ul class="list-inside list-disc flex flex-wrap">
							<li v-for="tag in blog.tags.getTags()" class="p-3 capitalize j-link"
								@click="blog.displayTagArchive(tag)">{{ tag }}
							</li>
						</ul>
					</div>
				</section>
				<section v-if="blog.displayType === Display.Years">
					<div class="text-orange-400 grid grid-cols-2 justify-items-start mb-6">
						<div>
							<p v-if="blog.yearPreviewCanGoBack()" class="j-link"
							   @click="blog.displayYearArchive(blog.getYearToDisplay() - 1)">« Newer</p>
						</div>
						<div class="justify-self-end">
							<p v-if="blog.yearPreviewCanGoForward()" class="j-link"
							   @click="blog.displayYearArchive(blog.getYearToDisplay() + 1)">Older »</p>
						</div>
					</div>
					<div v-for="month in blog.archive.years[blog.getYearToDisplay()].months" class="mb-12">
						<h2 class="text-blue-400">{{ month.month.substring(2) }}
							{{ blog.archive.years[blog.getYearToDisplay()].year }}</h2>
						<hr class="border-orange-400">
						<div v-for="day in month.days">
							<p v-for="title in day.titles" class="j-link my-4 mx-4"
							   @click="blog.updateDisplayedPost(title, blog.archive.years[blog.getYearToDisplay()].year, month.month, day.day)">
								{{ day.day }} - {{ title }}</p>
						</div>
					</div>
				</section>
			</div>
			<div class="flex-1">
				<section>
					<div class="mt-4 grid grid-cols-2 justify-items-center">
						<h2 class="text-blue-400 col-span-2">Archive</h2>
						<p class="j-link" @click="blog.displayYearArchive(0)">By Year</p>
						<p class="j-link" @click="blog.displayTagArchive('')">By Category</p>
						<hr>
						<a :href="blog.baseURL + 'feed.rss'" class="col-span-2 pt-2 text-sm"
						   title="Subscribe to the Feed">Subscribe via RSS</a>
					</div>
				</section>
			</div>
		</div>
	</Centered>
</template>

<style>
ul.collapsed {
	list-style-image: url("/collapsed-black.png");
	list-style-position: outside;
	margin-left: 1rem;
}

ul.expanded {
	list-style-image: url("/expanded-black.png");
	list-style-position: outside;
	margin-left: 1rem;
}

ul.no-arrow {
	list-style-image: none;
}
</style>