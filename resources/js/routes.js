import Home from './components/Home';
import Support from './components/Support';
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

            path: '/support',
            component: Support
            
        },

        {

            path: '/contact',
            component: Contact
            
        },
    ]
};