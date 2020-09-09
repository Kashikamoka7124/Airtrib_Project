export default [
    {
        name: 'homepage',
        path: '/',
        component: require('Page/Homepage').default
    },
    {
        name: 'flight-results',
        path: '/flights',
        component: require('Page/Results').default
    },
    {
        name: 'travelers',
        path: '/flights/flight',
        component: require('Page/SelectedFlight').default
    },
    {
        name: 'payment',
        path: '/flights/payment',
        component: require('Page/Payment').default
    },
    {
        name: 'confirmation',
        path: '/flights/confirmation',
        component: require('Page/Confirmation').default
    },

    // 404 Error
    {
        name: '404',
        path: '*',
        component: require('Page/404').default
    }
]
