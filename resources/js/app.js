import './bootstrap';
import { createApp } from 'vue';

const app = createApp({
    data() {
        return {
            message: 'Hello World!',
        };
    },
}).mount('#app');