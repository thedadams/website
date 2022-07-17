import {createApp} from "vue"
import App from "./src/App.vue"
import Research from "./src/Pages/Research.vue"

createApp(App, {page: "research"})
	.component("MainBody", Research)
	.mount("#app")
