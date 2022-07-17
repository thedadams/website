import {createApp} from "vue"
import App from "./src/App.vue"
import Minimal from "./src/Pages/Minimal.vue"

createApp(App, {page: "minimal"})
	.component("MainBody", Minimal)
	.mount("#app")
