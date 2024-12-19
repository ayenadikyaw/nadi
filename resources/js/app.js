import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import Default from "./Layouts/Default.vue";
import AdminLayout from "./Layouts/AdminLayout.vue";
import PrimeVue from "primevue/config";
import "primeicons/primeicons.css";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import ToastService from "primevue/toastservice";
import moment from "moment";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => {
        //console.log("setting page tilte", title);
        return title ? `${title} | Nadi` : "Nadi";
    },
    resolve: (name) => {
        const pages = import.meta.glob(
            ["./Pages/**/*.vue", "./Pages/Admin/**/*.vue"],
            { eager: true }
        );
        let page = pages[`./Pages/${name}.vue`];

        // Set up the default layout
        page.default.layout = name.startsWith("Admin/") ? AdminLayout : Default;

        return page.default;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(PrimeVue)
            .use(ToastService)
            .use(moment)
            .component("QuillEditor", QuillEditor)
            .mount(el);
    },
    progress: {
        // The color of the progress bar...
        color: "red",

        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
    },
});
