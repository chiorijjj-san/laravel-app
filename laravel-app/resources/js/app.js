import './bootstrap';

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
  broadcaster: 'pusher',
  key: 'your-app-key',
  cluster: 'mt1',
  forceTLS: true
});

window.Echo.private('chat')
    .listen('.message.sent', (e) => {
        console.log('New message:', e.message);
    });
