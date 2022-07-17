import {createApp} from "vue"
import App from "./src/App.vue"
import Credits from "./src/Pages/Credits.vue"

createApp(App, {page: "credits"})
	.component("MainBody", Credits)
	.mount("#app")
