import {createApp} from "vue"
import App from "./src/App.vue"
import Basketball from "./src/Pages/Basketball.vue"

createApp(App, {page: "basketball"})
	.component("MainBody", Basketball)
	.mount("#app")
