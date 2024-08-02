import {createApp} from "vue"
import App from "./src/App.vue"
import Home from "./src/Pages/Home.vue"

createApp(App, {page: "home"}).component("MainBody", Home).mount("#app")
