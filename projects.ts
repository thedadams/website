import {createApp} from "vue"
import App from "./src/App.vue"
import Projects from "./src/Pages/Projects.vue"

createApp(App, {page: "projects"})
	.component("MainBody", Projects)
	.mount("#app")
