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
                class="p-2 -mr-2 rounded-full hover:bg-white/10 transition-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

        </div>
    </div>
</nav>

{{-- overlay gelap pas menu terbuka --}}
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-100 hidden backdrop-blur-sm transition-opacity duration-300"></div>

{{-- panel menu geser dari kanan --}}
<div id="mobile-menu-panel"
     class="fixed top-0 right-0 bottom-0 w-[85%] max-w-sm bg-white z-101 shadow-2xl translate-x-full transition-transform duration-300 ease-out"
     role="dialog"
     aria-label="Menu navigasi">

    {{-- Header Panel --}}
    <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
        <img src="{{ asset('assets/icons/englishvit-logo.svg') }}" alt="Englishvit" class="h-8 w-auto">
        <button id="mobile-menu-close"
                aria-label="Tutup menu"
                class="p-2 -mr-2 text-gray-500 hover:text-black transition-colors">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    {{-- Auth Section --}}
    <div class="px-6 py-8">
        <div class="grid grid-cols-2 gap-3 mb-8">
            <a href="{{ url('/login') }}" class="flex items-center justify-center py-2.5 px-4 rounded-lg bg-info-1 text-info-7 font-bold text-sm hover:bg-info-2 transition-colors">
                Masuk
            </a>
            <a href="{{ url('/register') }}" class="flex items-center justify-center py-2.5 px-4 rounded-lg bg-info-7 text-white font-bold text-sm hover:bg-info-8 transition-colors">
                Daftar
            </a>
        </div>

        {{-- Nav Links --}}
        <div class="space-y-1">
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-widest mb-4">Main Menu</p>
            <a href="{{ url('/') }}" class="flex items-center py-3.5 text-gray-800 font-semibold text-base border-b border-gray-50 active:bg-gray-50">
                Beranda
            </a>
            <a href="{{ url('/daftar-kursus') }}" class="flex items-center justify-between py-3.5 text-gray-800 font-semibold text-base border-b border-gray-50 active:bg-gray-50">
                Daftar Kursus
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="{{ url('/blog') }}" class="flex items-center py-3.5 text-gray-800 font-semibold text-base border-b border-gray-50 active:bg-gray-50">
                Blog
            </a>
            <a href="{{ url('/promo') }}" class="flex items-center py-3.5 text-gray-800 font-semibold text-base border-b border-gray-50 active:bg-gray-50">
                Promo
            </a>
            <a href="{{ url('/karir') }}" class="flex items-center py-3.5 text-gray-800 font-semibold text-base border-b border-gray-50 active:bg-gray-50">
                Karir
            </a>
        </div>

        {{-- Contact / Help Section (Optional but adds premium feel) --}}
        <div class="mt-12 p-4 rounded-xl bg-gray-50 border border-gray-100">
            <p class="text-xs text-gray-500 mb-2">Butuh bantuan?</p>
            <a href="#" class="text-sm font-bold text-info-7 flex items-center">
                Hubungi Admin Kami
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </div>
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
