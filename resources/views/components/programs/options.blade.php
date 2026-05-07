{{-- section pilihan program --}}
<section class="py-ev-5 md:py-ev-7 mt-ev-4">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        
        {{-- judul section --}}
        <div class="text-center mb-ev-6">
            <h2 class="text-ev-body-lg md:text-ev-h4 font-semibold text-black-8">
                Pilihan Program Belajar di Englishvit
            </h2>
        </div>

        {{-- container flex/grid --}}
        <div class="grid grid-cols-2 lg:flex lg:flex-row gap-ev-2 md:gap-ev-3 w-full">
            
            {{-- 1. live class --}}
            <a href="#live-class" class="group flex lg:flex-1">
                <div class="flex flex-col lg:flex-row items-center lg:items-center gap-ev-2 lg:gap-ev-3 p-ev-3 lg:p-ev-3 rounded-ev-md shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-white hover:bg-info-1 transition-colors w-full h-full">
                    <img src="{{ asset('assets/images/sections/options/live.webp') }}" alt="Live Class" class="h-ev-logo-desk w-auto object-contain shrink-0 mb-ev-2 lg:mb-0">
                    <div class="text-center lg:text-left">
                        <p class="text-ev-body-sm lg:text-ev-body font-bold text-black-8 leading-tight mb-0">Live Class</p>
                        <p class="text-ev-body-xs lg:text-ev-body-sm text-black-6 leading-snug mb-0">Kelas online tatap muka dengan tutor profesional.</p>
                    </div>
                </div>
            </a>

            {{-- 2. one on one --}}
            <a href="#one-on-one" class="group flex lg:flex-1">
                <div class="flex flex-col lg:flex-row items-center lg:items-center gap-ev-2 lg:gap-ev-3 p-ev-3 lg:p-ev-3 rounded-ev-md shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-white hover:bg-info-1 transition-colors w-full h-full">
                    <img src="{{ asset('assets/images/sections/options/student.webp') }}" alt="One on One" class="h-ev-logo-desk w-auto object-contain shrink-0 mb-ev-2 lg:mb-0">
                    <div class="text-center lg:text-left">
                        <p class="text-ev-body-sm lg:text-ev-body font-bold text-black-8 leading-tight mb-0">One on One</p>
                        <p class="text-ev-body-xs lg:text-ev-body-sm text-black-6 leading-snug mb-0">Belajar intensif dengan program private satu murid satu guru.</p>
                    </div>
                </div>
            </a>

            {{-- 3. certification test --}}
            <a href="#certification-test" class="group flex lg:flex-1">
                <div class="flex flex-col lg:flex-row items-center lg:items-center gap-ev-2 lg:gap-ev-3 p-ev-3 lg:p-ev-3 rounded-ev-md shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-white hover:bg-info-1 transition-colors w-full h-full">
                    <img src="{{ asset('assets/images/sections/options/lp.webp') }}" alt="Certification Test" class="h-ev-logo-desk w-auto object-contain shrink-0 mb-ev-2 lg:mb-0">
                    <div class="text-center lg:text-left">
                        <p class="text-ev-body-sm lg:text-ev-body font-bold text-black-8 leading-tight mb-0">Certification Test</p>
                        <p class="text-ev-body-xs lg:text-ev-body-sm text-black-6 leading-snug mb-0">Test sertifikasi kemampuan dengan standar yang diakui.</p>
                    </div>
                </div>
            </a>

            {{-- 4. lainnya --}}
            <a href="#lainnya" class="group flex lg:flex-1">
                <div class="flex flex-col lg:flex-row items-center justify-center gap-ev-2 lg:gap-ev-3 p-ev-3 lg:p-ev-3 rounded-ev-md shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-info-1 h-full w-full">
                    <img src="{{ asset('assets/images/sections/options/more.webp') }}" alt="Lainnya" class="h-ev-logo-desk w-auto object-contain shrink-0 mb-ev-2 lg:mb-0">
                    <p class="text-ev-body-sm lg:text-ev-body font-bold text-info-7 text-center min-w-ev-min-card-sm lg:min-w-ev-min-card mb-0">Lainnya</p>
                </div>
            </a>

        </div>

    </div>
</section>
