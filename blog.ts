import {createApp} from "vue"
import App from "./src/App.vue"
import Blog from "./src/Pages/Blog.vue"

createApp(App, {page: "blog"}).component("MainBody", Blog).mount("#app")
