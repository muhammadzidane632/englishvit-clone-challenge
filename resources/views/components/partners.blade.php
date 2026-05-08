@php
    $partners = [
        'detik.webp',
        'g2.webp',
        'primafit.webp',
        'bnec.webp',
        'bhina-bhakti-husada.webp',
        'himatekkits.webp',
        'indmira.webp',
        'ptpn.webp',
        'sicepat.webp',
        'thenblank.webp'
    ];
@endphp

<section class="bg-primary-1 pt-4 pb-ev-7" id="partners">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        <div class="mt-ev-4 pt-ev-4 pb-2 border-t border-gray-100">
            <h3 class="text-center font-bold text-gray-800 text-sm sm:text-base md:text-lg mb-8">
                250+ lembaga dan instansi telah menggunakan layanan kami
            </h3>
            
            {{-- Marquee Wrapper --}}
            <div class="overflow-hidden relative flex w-full">
                {{-- First set of partners --}}
                <div class="flex items-center min-w-max animate-[ev-marquee_30s_linear_infinite] pr-12">
                    @foreach($partners as $partner)
                        <div class="flex justify-center items-center mx-4 md:mx-6 shrink-0">
                            <img src="{{ asset('assets/images/sections/partners/' . $partner) }}" alt="Partner" class="h-12 md:h-16 w-auto object-contain">
                        </div>
                    @endforeach
                </div>
                
                {{-- Second set (Duplicate for seamless loop) --}}
                <div class="flex items-center min-w-max animate-[ev-marquee_30s_linear_infinite] pr-12" aria-hidden="true">
                    @foreach($partners as $partner)
                        <div class="flex justify-center items-center mx-4 md:mx-6 shrink-0">
                            <img src="{{ asset('assets/images/sections/partners/' . $partner) }}" alt="Partner" class="h-12 md:h-16 w-auto object-contain">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
