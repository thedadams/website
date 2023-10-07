import {createApp} from "vue"
import App from "./src/App.vue"
import Uses from "./src/Pages/Uses.vue"

createApp(App, {page: "uses"})
	.component("MainBody", Uses)
	.mount("#app")
