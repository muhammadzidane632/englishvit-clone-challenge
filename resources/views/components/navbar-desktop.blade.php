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
                <li>
                    <a href="{{ url('/daftar-kursus') }}"
                       class="text-white/90 text-ev-body font-normal px-2 py-2 hover:text-white transition-colors">
                        Daftar Kursus
                    </a>
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
