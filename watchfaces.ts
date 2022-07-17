import {createApp} from "vue"
import App from "./src/App.vue"
import Watchfaces from "./src/Pages/Watchfaces.vue"

createApp(App, {page: "watchfaces"})
	.component("MainBody", Watchfaces)
	.mount("#app")
