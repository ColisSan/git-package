import {createApp} from 'vue/dist/vue.esm-bundler.js';

import Hello from '../js/components/hello.vue';

const vueApp = createApp({});

console.log("APP JS");
vueApp.component('hello', Hello);
vueApp.mount("#vue-app");