{{-- Bottom Navigation Bar for Mobile --}}
<nav class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-black-2 z-99 px-ev-4 pt-ev-1 pb-1" id="bottom-navbar">
    <div class="flex justify-between items-center h-full">
        
        {{-- Home --}}
        <a href="{{ url('/') }}" class="flex flex-col items-center gap-1 flex-1">
            <div class="w-7 h-7 flex items-center justify-center">
                <img src="{{ asset('assets/icons/ev-home.svg') }}" alt="Home" class="w-7 h-7 active-icon">
            </div>
            <span class="text-[11px] font-medium text-info-7">Home</span>
        </a>

        {{-- My Class --}}
        <a href="#" class="flex flex-col items-center gap-1 flex-1">
            <div class="w-7 h-7 flex items-center justify-center">
                <img src="{{ asset('assets/icons/ev-my-class.svg') }}" alt="My Class" class="w-[22px] h-[22px] opacity-60">
            </div>

            <span class="text-[11px] font-medium text-black-6">My Class</span>
        </a>

        {{-- Promo --}}
        <a href="#" class="flex flex-col items-center gap-0.5 flex-1">
            <div class="w-ev-6 h-ev-6 flex items-center justify-center">
                <lottie-player 
                    src="{{ asset('assets/lottie/discount_icon.json') }}" 
                    background="transparent" 
                    speed="1" 
                    loop 
                    autoplay 
                    class="w-full h-full">
                </lottie-player>
            </div>
            <span class="text-[11px] font-medium text-black-6">Promo</span>
        </a>

        {{-- Transaction --}}
        <a href="#" class="flex flex-col items-center gap-1 flex-1">
            <div class="w-7 h-7 flex items-center justify-center">
                <img src="{{ asset('assets/icons/ev-transaction.svg') }}" alt="Transaction" class="w-7 h-7 opacity-60">
            </div>
            <span class="text-[11px] font-medium text-black-6">Transaction</span>
        </a>

    </div>
</nav>

<style>
    @media (max-width: 767px) {
        body {
            padding-bottom: 60px; /* Precise height of the bottom navbar */
        }
    }
    /* Filter to turn black SVG to #006CE4 (info-7) */
    .active-icon {
        filter: invert(27%) sepia(91%) saturate(2852%) hue-rotate(202deg) brightness(96%) contrast(105%);
    }
</style>
