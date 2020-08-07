import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from './components/ExampleComponent'

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes: [
        {
            // name: 'aa',
            // path: '/test',
            // component: ExampleComponent
        },
    ]

})

export default router