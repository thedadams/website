import {createApp} from "vue"
import App from "./src/App.vue"
import PastProjects from "./src/Pages/PastProjects.vue"

createApp(App, {page: "pastprojects"})
	.component("MainBody", PastProjects)
	.mount("#app")
