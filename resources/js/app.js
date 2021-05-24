//require('./bootstrap');

//require('alpinejs');

import {createApp} from "vue";
import tabla from './vue-components/tabla.vue';
createApp({
    components:{
    tabla
    }
}).mount("#app")
