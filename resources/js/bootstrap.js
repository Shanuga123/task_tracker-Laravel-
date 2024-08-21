import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Import Echo and Pusher libraries
import Echo from 'laravel-echo';
window.Pusher = require('pusher-js');

// Configure Echo with Pusher
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY, // Use your Pusher key
    cluster: process.env.MIX_PUSHER_APP_CLUSTER, // Use your Pusher cluster
    forceTLS: true // Use TLS (HTTPS) for security
});
