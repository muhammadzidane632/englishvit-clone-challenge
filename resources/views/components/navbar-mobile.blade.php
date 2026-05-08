{{-- navbar mobile --}} 
<nav class="md:hidden bg-primary-8" id="navbar-mobile">
    <div class="px-ev-3 py-ev-3 flex justify-between items-center bg-primary-8">

        {{-- logo --}}
        <a href="{{ url('/') }}" aria-label="Beranda">
            <img src="{{ asset('assets/icons/englishvit-logo.svg') }}" alt="Englishvit" class="h-ev-logo-mob w-auto">
        </a>

        {{-- kanan: tombol masuk + hamburger --}}
        <div class="flex items-center gap-2">
            <a href="{{ url('/login') }}" class="text-white text-ev-body-sm font-semibold px-ev-3 py-ev-2 rounded-ev-sm bg-info-7 hover:bg-blue-500 transition-colors mr-3">
                Masuk
            </a>

            <button
                id="mobile-menu-toggle"
                aria-label="Buka menu"
                aria-expanded="false"
                class="p-1.5 rounded hover:bg-white/10 transition-colors">
                <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.4523 10.5H7.5498C6.72106 10.5 6.0498 9.82877 6.0498 9C6.0498 8.17125 6.72106 7.5 7.5498 7.5H22.4523C23.281 7.5 23.9523 8.17125 23.9523 9C23.9523 9.82877 23.281 10.5 22.4523 10.5Z" fill="white"/>
                    <path d="M22.4523 16.5H11.2998C10.471 16.5 9.7998 15.8288 9.7998 15C9.7998 14.1712 10.471 13.5 11.2998 13.5H22.4523C23.281 13.5 23.9523 14.1712 23.9523 15C23.9523 15.8288 23.281 16.5 22.4523 16.5Z" fill="white"/>
                    <path d="M22.4523 22.499H7.5498C6.72106 22.499 6.0498 21.8278 6.0498 20.999C6.0498 20.1703 6.72106 19.499 7.5498 19.499H22.4523C23.281 19.499 23.9523 20.1703 23.9523 20.999C23.9523 21.8278 23.281 22.499 22.4523 22.499Z" fill="white"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

{{-- overlay gelap pas menu terbuka --}}
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/40 z-100 hidden"></div>

{{-- panel menu geser dari kanan --}}
<div id="mobile-menu-panel"
     class="fixed top-0 right-0 bottom-0 w-[80%] max-w-xs bg-white z-101 shadow-2xl translate-x-full transition-transform duration-300 ease-in-out"
     role="dialog"
     aria-label="Menu navigasi">

    {{-- bagian atas panel: masuk & daftar --}}
    <div class="bg-info-1 px-5 pt-14 pb-4">
        <a href="{{ url('/login') }}" class="flex items-center py-3 border-b border-blue-100 text-info-7 font-semibold">
            Masuk
        </a>
        <a href="{{ url('/register') }}" class="flex items-center py-3 text-info-7 font-semibold">
            Buat Akun
        </a>
    </div>

    {{-- tombol X tutup panel --}}
    <button id="mobile-menu-close"
            aria-label="Tutup menu"
            class="absolute top-4 right-4 bg-white rounded-full shadow p-2 hover:bg-gray-50 transition-colors">
        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
            <path d="M0.295 10.285C-0.098 9.891-0.098 9.252 0.295 8.858L8.857 0.295C9.251-0.098 9.890-0.098 10.284 0.295C10.677 0.689 10.677 1.328 10.284 1.722L1.723 10.285C1.328 10.678 0.690 10.678 0.295 10.285Z" fill="#1C1F22"/>
            <path d="M10.285 10.285C9.891 10.678 9.252 10.678 8.858 10.285L0.295 1.722C-0.098 1.328-0.098 0.689 0.295 0.295C0.689-0.098 1.328-0.098 1.722 0.295L10.284 8.858C10.678 9.252 10.678 9.890 10.285 10.285Z" fill="#1C1F22"/>
        </svg>
    </button>

    {{-- link-link navigasi --}}
    <nav class="px-5 py-2">
        <a href="{{ url('/daftar-kursus') }}" class="flex items-center py-4 border-b border-gray-100 text-gray-700 font-medium hover:text-info-7 transition-colors">
            Daftar Kursus
        </a>
        <a href="{{ url('/blog') }}" class="flex items-center py-4 border-b border-gray-100 text-gray-700 font-medium hover:text-info-7 transition-colors">
            Blog
        </a>
        <a href="{{ url('/promo') }}" class="flex items-center py-4 border-b border-gray-100 text-gray-700 font-medium hover:text-info-7 transition-colors">
            Promo
        </a>
        <a href="{{ url('/karir') }}" class="flex items-center py-4 border-b border-gray-100 text-gray-700 font-medium hover:text-info-7 transition-colors">
            Karir
        </a>
    </nav>
</div>

{{-- toggle buka/tutup menu --}}
<script>
    (function () {
        var toggle  = document.getElementById('mobile-menu-toggle');
        var close   = document.getElementById('mobile-menu-close');
        var overlay = document.getElementById('mobile-menu-overlay');
        var panel   = document.getElementById('mobile-menu-panel');

        function open() {
            overlay.classList.remove('hidden');
            panel.classList.remove('translate-x-full');
            toggle.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        }
        function closeMenu() {
            overlay.classList.add('hidden');
            panel.classList.add('translate-x-full');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }

        if (toggle)  toggle.addEventListener('click', open);
        if (close)   close.addEventListener('click', closeMenu);
        if (overlay) overlay.addEventListener('click', closeMenu);
    })();
</script>
