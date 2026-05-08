{{-- navbar desktop, muncul dari layar md ke atas --}}
<nav class="hidden md:block bg-primary-8" id="navbar-desktop">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        <div class="flex items-center justify-between py-ev-4 md:py-0 md:min-h-ev-navbar-desk">

            {{-- logo --}}
            <a href="{{ url('/') }}" aria-label="Beranda">
                <img
                    src="{{ asset('assets/icons/englishvit-logo.svg') }}"
                    alt="Englishvit"
                    class="h-ev-logo-desk w-ev-logo-desk">
            </a>

            {{-- menu navigasi --}}
            <ul class="flex items-center gap-2 list-none m-0 p-0">
                <li>
                    <a href="{{ url('/') }}"
                       class="text-white/90 text-ev-body font-normal px-2 py-2 hover:text-white transition-colors">
                        Beranda
                    </a>
                </li>
                <li class="relative group">
                    <a href="{{ url('/daftar-kursus') }}"
                       class="flex items-center text-white/90 text-ev-body font-normal px-2 py-2 hover:text-white transition-colors">
                        Daftar Kursus
                        <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    
                    {{-- Dropdown Menu --}}
                    <div class="absolute left-0 top-full pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                        <div class="bg-white rounded-lg shadow-xl py-2 min-w-[220px] border border-gray-100">
                            <a href="#" class="block px-6 py-3 text-black font-medium hover:bg-gray-50 transition-colors">Live Class</a>
                            <a href="#" class="block px-6 py-3 text-black font-medium hover:bg-gray-50 transition-colors">One on One</a>
                            <a href="#" class="block px-6 py-3 text-black font-medium hover:bg-gray-50 transition-colors">Certification Test</a>
                            <a href="#" class="block px-6 py-3 text-black font-medium hover:bg-gray-50 transition-colors">Learning Package</a>
                            <a href="#" class="block px-6 py-3 text-black font-medium hover:bg-gray-50 transition-colors">Smart Book</a>
                            <a href="#" class="block px-6 py-3 text-black font-medium hover:bg-gray-50 transition-colors">Subscription</a>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{ url('/blog') }}"
                       class="text-white/90 text-ev-body font-normal px-2 py-2 hover:text-white transition-colors">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ url('/promo') }}"
                       class="text-white/90 text-ev-body font-normal px-2 py-2 hover:text-white transition-colors">
                        Promo
                    </a>
                </li>
                <li>
                    <a href="{{ url('/karir') }}"
                       class="text-white/90 text-ev-body font-normal px-2 py-2 hover:text-white transition-colors">
                        Karir
                    </a>
                </li>

                {{-- tombol masuk --}}
                <li class="ml-ev-4">
                    <a href="{{ url('/login') }}"
                       id="btn-masuk-desktop"
                       class="text-white text-ev-body font-semibold px-4 py-2 rounded-ev-sm bg-info-7 hover:bg-blue-500 transition-colors">
                        Masuk
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
