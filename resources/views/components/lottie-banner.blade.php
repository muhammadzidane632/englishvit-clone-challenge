<section class="pt-0 pb-12 md:pb-16 bg-white">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        <div class="w-full max-w-[1050px] mx-auto">
            <a href="https://englishvit.com/testing-system/proficiency-test/351/start" class="block rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 relative group">
                {{-- Overlay on hover --}}
                <div class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none"></div>
                
                {{-- Desktop Lottie --}}
                <lottie-player 
                    src="{{ asset('assets/lottie/ielts_bannernew.json') }}" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay 
                    class="hidden md:block w-full h-auto" 
                    style="min-height: 100px;">
                </lottie-player>
                
                {{-- Mobile Lottie --}}
                <lottie-player 
                    src="{{ asset('assets/lottie/levelem.json') }}" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay 
                    class="block md:hidden w-full h-auto" 
                    style="min-height: 100px;">
                </lottie-player>
            </a>
        </div>
    </div>
</section>
