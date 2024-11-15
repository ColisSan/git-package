import { createApp } from 'vue';

import Index from './components/Index.vue';

// const vueApp = createApp({});

let app = createApp({});

app.component('index', Index);
app.mount('#git-package-app');

// vueApp.component('hello', Hello);
// vueApp.mount("#git-package-app");