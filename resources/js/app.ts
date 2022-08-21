import "./bootstrap";
import "vuetify/styles";
import "@mdi/font/css/materialdesignicons.css";
import { createApp } from "vue";
import { createVuetify, ThemeDefinition } from "vuetify";
import { mdi } from "vuetify/iconsets/mdi";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import * as projectComponents from "./components";

const myTheme: ThemeDefinition = {
    dark: false,
    colors: {
        background: "#FFFFFF",
        surface: "#FFFFFF",
        primary: "#1E88E5",
        secondary: "#FF7043",
        error: "#B00020",
        info: "#2196F3",
        success: "#4CAF50",
        warning: "#FB8C00",
    },
};

const app = createApp({
    components: {
        ...projectComponents,
    },
});
const vuetify = createVuetify({
    theme: {
        defaultTheme: "myTheme",
        themes: {
            myTheme,
        },
    },
    icons: {
        defaultSet: "mdi",
        sets: {
            mdi,
        },
    },
    components: {
        ...components,
    },
    directives,
});
app.use(vuetify);
app.mount("#app");
