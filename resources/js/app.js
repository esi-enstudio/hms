import './bootstrap';
import 'flowbite';
import { createApp, h } from 'vue'
import {createInertiaApp, Head, Link} from '@inertiajs/vue3'
import { ZiggyVue } from '../../vendor/tightenco/ziggy'
import {setThemeOnLoad} from "@/theme.js";
import MainLayout from "@/Layouts/MainLayout.vue";

createInertiaApp({
    title: (title) => `${title} HMS`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || MainLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('Head', Head)
            .component('Link', Link)
            .mount(el)
    },
    progress: {
        // The color of the progress bar...
        color: '#fff',

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
    },
})

setThemeOnLoad()
