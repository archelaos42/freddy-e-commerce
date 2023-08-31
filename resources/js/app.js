import './bootstrap';
import '../css/app.css';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import AppLayout from "@/Layouts/AppLayout.vue";

const csrf_token = $('meta[name="csrf-token"]').attr('content');
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {

        const page = resolvePageComponent(

            `./Pages/${name}.vue`,

            import.meta.glob("./Pages/**/*.vue")

        );

        page.then((module) => {
            // if(page.layout){
            //     module.default.layout = module.default.layout || AppLayout;
            // }
            // module.default.layout = module.default.layout || AppLayout;

        });

        return page;

    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({
    color: '#4B5563',
    showSpinner: true,
});
