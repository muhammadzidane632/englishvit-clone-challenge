<section class="pt-4 pb-12 md:pt-6 md:pb-20 bg-white" id="cta-admin">
    <div class="max-w-[1140px] mx-auto px-4 md:px-6">
        <div class="relative overflow-hidden rounded-2xl bg-[#0052CC] shadow-xl md:h-[260px] flex items-center"
             style="background-image: url('{{ asset('assets/images/sections/cta-admin/bgt.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            
            <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10 p-8 md:p-10 w-full relative z-10 text-center md:text-left">
                {{-- Admin Image with Phone --}}
                <div class="shrink-0 flex justify-center">
                    <img src="{{ asset('assets/images/sections/cta-admin/admin.webp') }}" 
                         alt="Admin Englishvit" 
                         class="h-[160px] sm:h-[180px] md:h-[220px] w-auto object-contain">
                </div>

                {{-- Content --}}
                <div class="flex-1 flex flex-col items-center md:items-start">
                    <p class="text-white text-sm md:text-base mb-1 font-medium opacity-90">Masih bingung menentukan program?</p>
                    <h2 class="text-white font-bold text-xl sm:text-2xl md:text-3xl mb-3 leading-tight max-w-lg">
                        Yuk, konsultasi dengan friendly admin Englishvit!
                    </h2>
                    <p class="text-white/80 text-xs md:text-sm mb-6 max-w-md">
                        Live Chat & Helpdesk via WhatsApp tersedia setiap hari Senin-Minggu, 09:00 - 22:00 WIB
                    </p>

                    <a href="https://wa.me/6281234567890" 
                       target="_blank" 
                       class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-green-600 text-white font-bold py-2.5 px-6 rounded-lg text-sm md:text-base transition-all hover:shadow-lg transform hover:-translate-y-1">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                        </svg>
                        Chat Admin Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
