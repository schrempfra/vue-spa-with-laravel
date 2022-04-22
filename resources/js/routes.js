import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';

export default {
    mode: 'history',

    linkActiveClass: 'border-indigo-500 text-gray-900',

    routes: [
        
        {

            path: '/',
            component: Home

        },

        {

            path: '/about',
            component: About
            
        },

        {

            path: '/contact',
            component: Contact
            
        },
    ]
};