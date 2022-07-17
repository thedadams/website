import {createApp} from "vue"
import App from "./src/App.vue"
import ContrastDots from "./src/Pages/ContrastDots.vue"

createApp(App, {page: "contrastdots"})
	.component("MainBody", ContrastDots)
	.mount("#app")
