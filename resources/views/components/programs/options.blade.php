{{-- section pilihan program --}}
<section class="py-[20px] md:py-[40px] mt-[50px]">
    <div class="container max-w-[1140px] mx-auto px-1 md:px-6">
        
        {{-- judul section --}}
        <div class="text-center mb-[30px]">
            <h2 class="text-xl md:text-2xl font-semibold text-black-8">
                Pilihan Program Belajar di Englishvit
            </h2>
        </div>

        {{-- grid menu program --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-[10px] w-full">
            
            {{-- 1. live class --}}
            <a href="#live-class" class="group h-full">
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left gap-[10px] p-[8px] md:p-[10px] rounded-lg shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-white hover:bg-info-1 transition-colors h-full">
                    <img src="{{ asset('assets/images/sections/live.webp') }}" alt="Live Class" class="h-[42px] w-auto object-contain shrink-0">
                    <div>
                        <p class="text-sm md:text-base font-bold text-black-8 leading-tight mb-1">Live Class</p>
                        <p class="text-xs md:text-sm text-black-6 leading-snug">Kelas online tatap muka dengan tutor profesional.</p>
                    </div>
                </div>
            </a>

            {{-- 2. one on one --}}
            <a href="#one-on-one" class="group h-full">
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left gap-[10px] p-[8px] md:p-[10px] rounded-lg shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-white hover:bg-info-1 transition-colors h-full">
                    <img src="{{ asset('assets/images/sections/student.webp') }}" alt="One on One" class="h-[42px] w-auto object-contain shrink-0">
                    <div>
                        <p class="text-sm md:text-base font-bold text-black-8 leading-tight mb-1">One on One</p>
                        <p class="text-xs md:text-sm text-black-6 leading-snug">Belajar intensif dengan program private satu murid satu guru.</p>
                    </div>
                </div>
            </a>

            {{-- 3. certification test --}}
            <a href="#certification-test" class="group h-full">
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left gap-[10px] p-[8px] md:p-[10px] rounded-lg shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-white hover:bg-info-1 transition-colors h-full">
                    <img src="{{ asset('assets/images/sections/lp.webp') }}" alt="Certification Test" class="h-[42px] w-auto object-contain shrink-0">
                    <div>
                        <p class="text-sm md:text-base font-bold text-black-8 leading-tight mb-1">Certification Test</p>
                        <p class="text-xs md:text-sm text-black-6 leading-snug">Test sertifikasi kemampuan dengan standar yang diakui.</p>
                    </div>
                </div>
            </a>

            {{-- 4. lainnya --}}
            <a href="#lainnya" class="group h-full">
                <div class="flex flex-col md:flex-row items-center justify-center gap-[10px] p-[10px] rounded-lg shadow-[0px_3px_6px_rgba(0,0,0,0.16)] bg-info-1 h-full">
                    <img src="{{ asset('assets/images/sections/more.webp') }}" alt="Lainnya" class="h-[42px] w-auto object-contain shrink-0">
                    <p class="text-sm font-bold text-info-7 text-center min-w-[100px]">Lainnya</p>
                </div>
            </a>

        </div>

    </div>
</section>
