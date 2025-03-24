import './bootstrap';
import '../css/app.css';
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import PrimeVue from 'primevue/config';
// import Layout from "./Layouts/Layout.vue";
import Aura from '@primevue/themes/aura';
import { definePreset } from '@primevue/themes';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import Tooltip from 'primevue/tooltip';
import ToastService from 'primevue/toastservice';
import ConfirmationService from 'primevue/confirmationservice';
import QrcodeVue from 'qrcode.vue'

const MyPreset = definePreset(Aura,{
  semantic: {
    primary: {
        50: '{Gray.50}',
        100: '{Gray.100}',
        200: '{Gray.200}',
        300: '{Gray.300}',
        400: '{Gray.400}',
        500: '{Gray.500}',
        600: '{Gray.600}',
        700: '{Gray.700}',
        800: '{Gray.800}',
        900: '{Gray.900}',
        950: '{Gray.950}'
    }
}
});

createInertiaApp({
  title:(title) => `E-report | ${title}`,
  resolve: (name) => {
    const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
    // let page = pages[`./Pages/${name}.vue`];
    // page.default.layout = pages.default.layout || Layout;
    // return page;
    // const page = pages[`./Pages/${name}.vue`];

    // Ensure page and page.default exist before setting layout
    // if (page && page.default) {
    //   page.default.layout = page.default.layout || Layout;
    // }

    // return page;
    return pages[`./Pages/${name}.vue`]
  },

  
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(PrimeVue,{
        theme: {
          preset: MyPreset,
          options: {
            prefix: 'p',
            darkModeSelector: '[data-theme="light"]',
            cssLayer: false
        },
      }
      })
      .use(ZiggyVue)
      .use(plugin)
      .use(ToastService)
      .use(ConfirmationService)
      .use(QrcodeVue)
      .component('Head', Head)
      .component('Link', Link)
      .directive('tooltip', Tooltip)
      .mount(el)
  },
  progress: {
    color:"blue",
    includeCSS: true,
    showSpinner: true
  }
})