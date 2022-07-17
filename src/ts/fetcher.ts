export class Fetcher<T> {
	readonly url: string
	private errorMessage: string = ""
	private fetched: boolean = false

	constructor(url: string) {
		this.url = url
	}

	public async fetch(): Promise<T> {
		return fetch(this.url)
			.then((response: Response) => {
				if (response.status == 200) {
					this.fetched = true
					return response.json()
				}
				return Promise.reject(
					new Error(
						`Failed getting post data, response code ${response.status}`
					)
				)
			})
			.catch((error) => {
				this.errorMessage = `Failed to fetch URL ${this.url}: ${error}`
				return Promise.reject(new Error(this.errorMessage))
			})
	}

	public hasFetched(): boolean {
		return this.fetched
	}

	public get(callback?: () => void): void {
		if (!this.fetched) {
			this.fetch().then((r: T) => {
				Object.assign(this, r)
				if (callback) callback()
			})
		}
	}

	public errorOccurred(): boolean {
		return this.errorMessage != ""
	}

	public getErrorMessage(): string {
		return this.errorMessage
	}
}
