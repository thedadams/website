import {createApp} from "vue"
import App from "./src/App.vue"
import About from "./src/Pages/About.vue"

createApp(App, {page: "about"}).component("MainBody", About).mount("#app")
