import {createApp} from "vue"
import App from "./src/App.vue"
import VerticalDials from "./src/Pages/VerticalDials.vue"

createApp(App, {page: "verticaldials"})
	.component("MainBody", VerticalDials)
	.mount("#app")
