import './bootstrap';
import { createApp } from 'vue';
import naive from 'naive-ui'

import LoginComponent from "./components/LoginComponent.vue";
import CarouselNew from "@/components/CarouselNew.vue";
import roadMapComponent from "@/components/roadMapComponent.vue";
import RegisterComponent from "@/components/RegisterComponent.vue";


const app = createApp({});
app.use(naive)

app.component('login-component',LoginComponent);
app.component('carousel-component',CarouselNew);
app.component('road-map-component',roadMapComponent);
app.component('register-component',RegisterComponent);


// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });


app.mount('#app');

