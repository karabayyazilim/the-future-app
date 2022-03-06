require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const mbopen = document.querySelector('#mb-menu-open');
const mbclose = document.querySelector('#mb-menu-close');

mbopen.addEventListener('click', () => {
   document.querySelector('.mb-menu').classList.remove('hidden');
});

mbclose.addEventListener('click', () => {
  document.querySelector('.mb-menu').classList.add('hidden')
});

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark')
}
