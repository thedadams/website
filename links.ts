import {createApp} from "vue"
import App from "./src/App.vue"
import Links from "./src/Pages/Links.vue"

createApp(App, {page: "links"}).component("MainBody", Links).mount("#app")
