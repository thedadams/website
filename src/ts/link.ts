import {Fetcher} from "./fetcher"

export class Link {
	public name: string
	public description: string
	public url: string
	public fileUrl: string

	constructor(name: string, description: string, url: string, fileUrl: string) {
		this.name = name
		this.description = description
		this.url = url
		this.fileUrl = fileUrl
	}
}

export class Links extends Fetcher<Link[]> {
	private links: Link[] = []

	constructor(url: string) {
		super(url)
	}

	public get(): void {
		this.fetch().then((links: Link[]) => {
			this.links = links
		})
	}

	public getLinks(): Link[] {
		return this.links
	}
}