import './bootstrap';

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
  broadcaster: 'pusher',
  key: '74b976a09fc6e0e01413',
  cluster: 'mt1',
  forceTLS: true
});

window.Echo.private('chat')
    .listen('.message.sent', (e) => {
        console.log('New message:', e.message);
    });
