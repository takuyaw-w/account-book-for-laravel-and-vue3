import "./bootstrap";
import "@mdi/font/css/materialdesignicons.css";
import "bulma/css/bulma.css";
import { createApp } from "vue";
import * as projectComponents from "./components";

const app = createApp({
    components: {
        ...projectComponents,
    },
});
app.mount("#app");
