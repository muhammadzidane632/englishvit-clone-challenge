import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import '@lottiefiles/lottie-player';

Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();
