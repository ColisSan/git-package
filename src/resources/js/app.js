import {createApp} from 'vue/dist/vue.esm-bundler.js';

import Hello from '../js/components/hello.vue';

const vueApp = createApp({});

console.log("APPsasas JS");
vueApp.component('hello', Hello);
vueApp.mount("#git-package-app");