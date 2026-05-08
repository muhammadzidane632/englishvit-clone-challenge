@php
    $mediaItems = [
        ['name' => 'iNews', 'image' => 'inews.webp', 'url' => 'https://www.inews.id/news/nasional/tes-toefl-pengertian-skor-biaya-dan-contohnya-agar-lolos'],
        ['name' => 'Liputan6', 'image' => 'liputan6.webp', 'url' => 'https://www.liputan6.com/regional/read/5291362/ini-trik-agar-ujian-toelf-bisa-lebih-mudah-serta-hemat-waktu-dan-biaya'],
        ['name' => 'Media Indonesia', 'image' => 'media-indonesia.webp', 'url' => 'https://mediaindonesia.com/weekend/582445/cara-mudah-dan-simpel-ikut-test-toefl'],
        ['name' => 'Sindonews', 'image' => 'sindonews.webp', 'url' => 'https://edukasi.sindonews.com/read/1102949/211/ingin-tingkatkan-kemampuan-bahasa-inggris-dan-toefl-bisa-coba-platform-ini-1684497944'],
        ['name' => 'Suara.com', 'image' => 'suaracom.webp', 'url' => 'https://www.suara.com/pressrelease/2023/05/19/064500/mudahkan-masyarakat-akses-tes-bahasa-inggris-standar-internasional-englishvit-hadirkan-platform-tes-online'],
        ['name' => 'Warta Jatim', 'image' => 'warta-jatim.webp', 'url' => 'https://wartajatim.co.id/kemudahan-akses-tes-bahasa-inggris-englishvit-perkenalkan-platform-tes-online-inovatif/'],
    ];
@endphp

<section class="py-6 md:py-8 bg-white overflow-hidden" id="media-coverage">
    <div class="max-w-[1140px] mx-auto px-4 md:px-6">
        {{-- Title --}}
        <div class="text-center mb-6 md:mb-8">
            <h4 class="text-black-8 font-semibold text-lg md:text-xl">Telah diliput oleh:</h4>
        </div>

        {{-- Marquee Wrapper --}}
        <div class="relative flex w-full overflow-hidden">
            {{-- Loop twice for seamless scrolling --}}
            @for ($i = 0; $i < 2; $i++)
                <div class="flex items-center min-w-max animate-[ev-marquee_30s_linear_infinite]" {!! $i === 1 ? 'aria-hidden="true"' : '' !!}>
                    @foreach($mediaItems as $item)
                        <div class="mx-3 md:mx-6 shrink-0">
                            <a href="{{ $item['url'] }}" target="_blank" class="block opacity-90 hover:opacity-100 transition-all duration-300">
                                <img src="{{ asset('assets/images/sections/diliputi-sponsor/' . $item['image']) }}" alt="{{ $item['name'] }}" class="h-10 md:h-16 w-auto object-contain">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>
</section>
