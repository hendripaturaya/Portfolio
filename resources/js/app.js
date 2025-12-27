import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');

    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.classList.add('shadow-lg');
        } else {
            header.classList.remove('shadow-lg');
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');

    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.classList.add(
                'shadow-lg',
                'bg-blue-600/90'
            );
        } else {
            header.classList.remove(
                'shadow-lg',
                'bg-blue-600/90'
            );
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('theme-toggle');
    const sunIcon = document.getElementById('icon-sun');
    const moonIcon = document.getElementById('icon-moon');
    const html = document.documentElement;

    // set icon awal
    if (html.classList.contains('dark')) {
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
    } else {
        moonIcon.classList.remove('hidden');
        sunIcon.classList.add('hidden');
    }

    toggleBtn.addEventListener('click', () => {
        html.classList.toggle('dark');

        if (html.classList.contains('dark')) {
            localStorage.theme = 'dark';
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        } else {
            localStorage.theme = 'light';
            moonIcon.classList.remove('hidden');
            sunIcon.classList.add('hidden');
        }
    });
});

