import {Fetcher} from "./fetcher"

export class Post extends Fetcher<Post> {
	public title?: string
	public tags?: string
	public updated?: string
	public body?: string
	public year: string
	public month: string
	public day: string
	public readonly created: string

	constructor(baseURL: string, year: string, month: string, day: string) {
		super(`${baseURL}${year}/${month}/${day}`)
		this.year = year
		this.month = month
		this.day = day
		this.created = month.substring(0, 2) + "/" + day + "/" + year
	}
}

class dayArchive {
	day: string = ""
	titles: string[] = []
}

class monthArchive {
	month: string = ""
	days: dayArchive[] = []
}

class yearArchive {
	year: string = ""
	months: monthArchive[] = []
}

export class Archive extends Fetcher<yearArchive[]> {
	years: yearArchive[] = []

	public get(callback?: () => void): void {
		this.fetch().then((years: yearArchive[]) => {
			this.years = years
			if (callback) callback()
		})
	}
}

export class Tags extends Fetcher<Object> {
	private tags: Map<string, Map<string, string>> = new Map()

	public get(): void {
		this.fetch().then((tags: Object) => {
			for (let t in tags) {
				let posts = new Map<string, string>()
				// @ts-ignore
				for (let u in tags[t]) {
					// @ts-ignore
					posts.set(u, tags[t][u])
				}
				this.tags.set(t, posts)
			}
		})
	}

	public getTags(): string[] {
		return Array.from(this.tags.keys())
	}

	public getPostsWithTag(tag: string): Map<string, string> | undefined {
		return this.tags.get(tag)
	}
}

export enum Display {
	Posts,
	Tags,
	Years,
}

export class Blog {
	public readonly baseURL: string
	public archive: Archive
	public posts: Map<string, Post> = new Map()
	public tags: Tags
	public previewTitles: string[] = []
	public displayType: Display = Display.Posts
	private previousDisplayType: Display = Display.Posts
	private displayTitle: string = ""
	private displayTag: string = ""
	private displayYear: number = 0
	private lastPreviewDirectionWasForward: boolean = true
	private previewYearIndex: number = 0
	private previewMonthIndex: number = 0
	private previewDayIndex: number = 0
	private previewTitleIndex: number = -1

	constructor(baseURL: string, archivePath: string, tagsPath: string) {
		this.baseURL = baseURL
		this.archive = new Archive(this.baseURL + archivePath)
		this.tags = new Tags(this.baseURL + tagsPath)
	}

	public getAndBuildPreview(buildPreview: boolean): void {
		if (!this.archive.hasFetched()) {
			this.archive.get(() => {
				if (buildPreview) {
					this.buildPreview(true).then(previewTitles => this.previewTitles = previewTitles)
				}
			})
		}
	}

	public getAndBuildTags(): void {
		this.tags.get()
	}

	public updateDisplayedPost(title: string, year: string, month: string, day: string): void {
		this.getPost(title, year, month, day).then(() => {
			this.displayTitle = title
			this.previousDisplayType = this.displayType
			this.displayType = Display.Posts
		})
	}

	public back(): void {
		if (this.displayTitle != "") {
			this.displayTitle = ""
			this.displayType = this.previousDisplayType
		} else if (this.displayTag != "") this.displayTag = ""
		else if (this.displayYear != 0) {
			this.displayYear = 0
			this.displayType = this.previousDisplayType
		}
	}

	public displayRecentPosts(): void {
		this.previousDisplayType = Display.Posts
		this.displayType = Display.Posts
		this.updateDisplayedPost("", "", "", "")
		if (this.previewTitles.length == 0) {
			this.buildNextPreview(true)
		}
	}

	public hasDisplayPost(): boolean {
		return this.posts.has(this.displayTitle)
	}

	public getDisplayedPost(): Post | undefined {
		return this.posts.get(this.displayTitle)
	}

	public displayTagArchive(tag: string): void {
		this.displayType = Display.Tags
		this.getAndBuildTags()
		this.displayTag = tag
	}

	public getDisplayTag(): string {
		return this.displayTag
	}

	public hasDisplayTag(): boolean {
		return !!this.displayTag
	}

	public displayYearArchive(year: number): void {
		this.displayType = Display.Years
		if (year < 0) year = 0
		else if (year >= this.archive.years.length) year = this.archive.years.length - 1
		this.displayYear = year
	}

	public getYearToDisplay(): number {
		return this.displayYear
	}

	public postPreviewCanGoBack(): boolean {
		return this.archive.years.length > 0 && this.previewTitles[0] != this.archive.years[0].months[0].days[0].titles[0]
	}

	public postPreviewCanGoForward(): boolean {
		return this.archive.years.length > 0 && (this.previewYearIndex != this.archive.years.length - 1 || this.previewMonthIndex != this.archive.years[this.previewYearIndex].months.length - 1 || this.previewDayIndex != this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days.length - 1 || this.previewTitleIndex != this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].titles.length - 1)
	}

	public yearPreviewCanGoBack(): boolean {
		return this.displayYear > 0
	}

	public yearPreviewCanGoForward(): boolean {
		return this.displayYear < this.archive.years.length - 1
	}

	public buildNextPreview(forward: boolean): void {
		this.buildPreview(forward).then(previewTitles => this.previewTitles = previewTitles)
		this.displayType = Display.Posts
	}

	private async buildPreview(forward: boolean): Promise<string[]> {
		if (!this.archive.hasFetched()) {
			return Promise.reject("Archive not yet fetched")
		}

		let postPreviewCount: number = 8
		if (this.lastPreviewDirectionWasForward != forward) {
			for (let i: number = 1; i < this.previewTitles.length; i++) {
				if (forward) {
					this.addOne()
				} else {
					this.subOne()
				}
			}
		}

		let previewTitles: string[] = []
		let moreLeft: boolean = true
		while (postPreviewCount > 0) {
			if (forward) {
				moreLeft = this.addOne()
			} else {
				moreLeft = this.subOne()
			}
			if (!moreLeft) break
			postPreviewCount--

			const title = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].titles[this.previewTitleIndex]
			this.getPost(title, this.archive.years[this.previewYearIndex].year, this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].month, this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].day).then(() => {
				if (forward) {
					previewTitles.push(title)
				} else {
					previewTitles.unshift(title)
				}
			})
		}

		this.lastPreviewDirectionWasForward = forward
		return Promise.resolve(previewTitles)
	}

	private async getPost(title: string, year: string, month: string, day: string) {
		if (!this.posts.has(title) && year) {
			const p = new Post(this.baseURL + "Posts/", year, month, day)
			p.get(() => {
				if (p.title) this.posts.set(p.title, p)
			})
		}
	}

	/**
	 * addOne will add one day with "carry" to months and years. If there is another day, this will return true. If there
	 * are no more days left, then false is returned.
	 */
	private addOne(): boolean {
		if (this.previewYearIndex == this.archive.years.length) {
			this.previewYearIndex--
			this.previewMonthIndex = this.archive.years[this.previewYearIndex].months.length - 1
			this.previewDayIndex = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days.length - 1
			this.previewTitleIndex = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].titles.length - 1
			return false
		}

		if (this.previewMonthIndex == this.archive.years[this.previewYearIndex].months.length) {
			this.previewYearIndex++
			this.previewMonthIndex = 0
			this.previewDayIndex = 0
			this.previewTitleIndex = -1
			return this.addOne()
		}

		if (this.previewDayIndex == this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days.length) {
			this.previewMonthIndex++
			this.previewDayIndex = 0
			this.previewTitleIndex = -1
			return this.addOne()
		}

		if (this.previewTitleIndex++ == this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].titles.length - 1) {
			this.previewDayIndex++
			this.previewTitleIndex = -1
			return this.addOne()
		}

		return true
	}

	/**
	 * subOne will subtract one day with "borrow" from months and years. If there is another day, this will return true.
	 * If there are no more days left, then false is returned.
	 */
	private subOne(): boolean {
		if (this.previewYearIndex == -1) {
			this.previewYearIndex = 0
			this.previewMonthIndex = 0
			this.previewDayIndex = 0
			return false
		}

		if (this.previewMonthIndex == -1) {
			if (this.previewYearIndex-- != 0) {
				this.previewMonthIndex = this.archive.years[this.previewYearIndex].months.length - 1
				this.previewDayIndex = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days.length - 1
				this.previewTitleIndex = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].titles.length
			}
			return this.subOne()
		}

		if (this.previewDayIndex == -1) {
			if (this.previewMonthIndex-- != 0) {
				this.previewDayIndex = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days.length - 1
				this.previewTitleIndex = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].titles.length
			}
			return this.subOne()
		}

		if (this.previewTitleIndex-- == 0) {
			if (this.previewDayIndex-- != 0) {
				this.previewTitleIndex = this.archive.years[this.previewYearIndex].months[this.previewMonthIndex].days[this.previewDayIndex].titles.length
			}
			return this.subOne()
		}

		return true
	}
}