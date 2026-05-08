<section class="py-12 md:py-16 relative bg-primary-10" style="background-image: url('{{ asset('assets/images/sections/promo/bgt2.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6 relative z-10">
        
        {{-- Header --}}
        <div class="text-center text-white mb-8 md:mb-10">
            <h2 class="font-bold text-ev-h3 md:text-ev-h2 text-white mb-3">
                Today’s Special Promo
            </h2>
            <p class="text-sm md:text-base text-gray-100">
                Lebih hemat daftar program dengan <span class="font-bold text-white">discount special</span> hari ini!
            </p>
        </div>

        {{-- Promo Content --}}
        <div class="w-full flex justify-center">
            <a href="#" class="block w-full max-w-[800px] rounded-lg md:rounded-xl overflow-hidden shadow-2xl hover:shadow-blue-900/50 hover:-translate-y-1 transition-all duration-300">
                <img src="{{ asset('assets/images/sections/promo/promo-item.webp') }}" alt="Special Promo" class="w-full h-auto object-cover md:max-h-[300px]">
            </a>
        </div>
    </div>
</section>
