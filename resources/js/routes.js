import Home from './components/Home';
import Support from './components/Support';
import Contact from './components/Contact';
import NotFound from './components/NotFound';
import Users from './components/Users';

export default {
    mode: 'history',

    linkActiveClass: 'border-indigo-500 text-gray-900',

    routes: [
        
        {
            path: '*',
            component: NotFound
        },

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

        {

            path: '/users',
            component: Users

        },
    ]
};