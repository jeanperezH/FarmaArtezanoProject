import './bootstrap';
import { createApp } from 'vue'
import HelloWorld from '@/components/HelloWorld.vue'
import HelloWorld2 from '@/components/HelloWorld2.vue'

window.app = createApp({
    
    components: {
        HelloWorld,
        HelloWorld2
    },
    methods: {
        miFuncion() {
            var menu = 0;
            console.log('¡@click funciona!');
        }
    },
    data(){
        return { menu : 0 }
    }
}).mount('#app');
