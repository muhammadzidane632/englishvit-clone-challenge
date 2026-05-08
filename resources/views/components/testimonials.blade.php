@php
    $testimonials = [
        [
            'name' => 'Anisa Cendani H.',
            'role' => 'Colleger',
            'text' => 'Saya belajar penggunaan grammar dengan cara yang lebih mudah dipahami. Saya juga dapat banyak kosakata baru yang membuat saya lebih pede.',
            'image' => asset('assets/images/sections/testimonials/person1.png'),
            'video_link' => '#',
        ],
        [
            'name' => 'Aristya Naziiha',
            'role' => 'Mechanical Engineering Student',
            'text' => 'Ini adalah kelas online pertama yang berkesan buat saya. Teachernya helpful banget dan membuat kita PD untuk speaking tanpa takut salah.',
            'image' => asset('assets/images/sections/testimonials/person2.png'),
            'video_link' => '#',
        ],
        [
            'name' => 'Nazulal S',
            'role' => 'Psychology Student',
            'text' => 'Sekarang saya lebih percaya diri saat writing dan speaking. My English has increased a lot!',
            'image' => asset('assets/images/sections/testimonials/person3.png'),
            'video_link' => '#',
        ],
        [
            'name' => 'Fadli Rahman',
            'role' => 'Fresh Graduate',
            'text' => 'Materi yang diberikan sangat relevan dengan dunia kerja. Cara penyampaiannya juga santai tapi ngena banget. Sangat direkomendasikan!',
            'image' => asset('assets/images/sections/testimonials/person4.png'),
            'video_link' => '#',
        ],
        [
            'name' => 'Rina Melati',
            'role' => 'Employee',
            'text' => 'Jadwalnya fleksibel dan materi mudah diakses. Sangat membantu saya yang sibuk kerja tapi ingin meningkatkan skill bahasa Inggris.',
            'image' => asset('assets/images/sections/testimonials/person5.png'),
            'video_link' => '#',
        ],
    ];
@endphp

<section class="bg-primary-1 pt-ev-5 pb-2" id="testimonials">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        
        {{-- Header --}}
        <div class="text-center mb-ev-6 mt-ev-5">
            <h2 class="font-bold text-ev-h3 md:text-ev-h1 text-black-8 mb-2 flex justify-center gap-2">
                +<span id="studentCounter" data-target="58824">0</span> Satisfied Students
            </h2>
            <p class="text-black-6 text-ev-body-sm md:text-ev-body">
                Kata mereka yang telah merasakan pengalaman belajar bersama Englishvit
            </p>
        </div>

        {{-- Slider Wrapper --}}
        <div class="relative w-full mx-auto max-w-[1200px]">
            <div class="overflow-hidden -mx-12 px-12 py-4">
                <div id="testimonialCardsWrapper" class="flex flex-nowrap gap-4 lg:gap-6 overflow-x-auto pb-6 snap-x snap-mandatory ev-hide-scroll scroll-smooth">
                    @foreach($testimonials as $testi)
                        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 flex flex-col snap-start shrink-0 w-[300px] sm:w-[350px] md:w-[calc(33.333%-16px)]">
                            
                            {{-- Card Header: Stars & Video Link --}}
                            <div class="flex justify-between items-center mb-5">
                                <div class="flex gap-1">
                                    @for($i=0; $i<5; $i++)
                                        <img src="{{ asset('assets/icons/star-testimonial.svg') }}" alt="Star" class="w-5 h-5">
                                    @endfor
                                </div>
                                <a href="{{ $testi['video_link'] }}" class="flex items-center text-[#0d6efd] hover:text-blue-800 text-sm font-bold">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                                    </svg>
                                    Lihat video
                                </a>
                            </div>

                            {{-- Testimonial Text --}}
                            <p class="text-gray-700 text-sm sm:text-base mb-6 grow line-clamp-4">
                                {{ $testi['text'] }}
                            </p>

                            {{-- Profile --}}
                            <div class="flex items-center mt-auto pt-4 border-t border-gray-50">
                                <img src="{{ $testi['image'] }}" alt="{{ $testi['name'] }}" class="w-12 h-12 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-bold text-gray-900 text-sm">{{ $testi['name'] }}</h4>
                                    <p class="text-xs text-gray-500">{{ $testi['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Pagination Navigation (Dots) --}}
            <div id="testimonialCarouselDots" class="justify-center items-center gap-2 mt-2 mb-4 flex h-ev-2 pointer-events-none lg:pointer-events-auto">
                @for($i = 0; $i < count($testimonials) - 1; $i++)
                    <button class="rounded-full transition-all duration-300 {{ $i == 0 ? 'bg-[#0d6efd] w-6 h-2' : 'bg-primary-2 w-2 h-2 hover:bg-primary-3' }} {{ $i > (count($testimonials) - 4) ? 'lg:hidden' : '' }}" data-index="{{ $i }}" aria-label="Slide {{ $i + 1 }}"></button>
                @endfor
            </div>


        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const testimonialWadahSlider = document.getElementById("testimonialCardsWrapper");
        const testimonialTitikNavigasi = document.querySelectorAll("#testimonialCarouselDots button");
        
        if (!testimonialWadahSlider || !testimonialTitikNavigasi.length) return;
        
        const updateTestimonialTitik = (indexAktif) => {
            testimonialTitikNavigasi.forEach((titik, idx) => {
                const isActive = idx === indexAktif;
                titik.className = isActive 
                    ? "rounded-full transition-all duration-300 bg-[#0d6efd] w-6 h-2"
                    : "rounded-full transition-all duration-300 bg-primary-2 w-2 h-2 hover:bg-primary-3";
                
                // Maintain the lg:hidden state from Blade
                if (idx > {{ count($testimonials) - 3 }}) {
                    titik.classList.add('lg:hidden');
                }
            });
        };


        let sedangGeserTestimonial = false;
        testimonialWadahSlider.addEventListener("scroll", () => {
            if (sedangGeserTestimonial) return;
            const kartuPertama = testimonialWadahSlider.children[0];
            const gayaElemen = window.getComputedStyle(testimonialWadahSlider);
            const jarakGap = parseFloat(gayaElemen.gap) || 0;
            const indexSekarang = Math.round(testimonialWadahSlider.scrollLeft / (kartuPertama.offsetWidth + jarakGap));
            
            // Handle edge case where index might be larger than dots due to different screen sizes
            const safeIndex = Math.min(indexSekarang, testimonialTitikNavigasi.length - 1);
            updateTestimonialTitik(safeIndex);
        });

        testimonialTitikNavigasi.forEach((titik) => {
            titik.addEventListener("click", function() {
                const targetIndex = parseInt(this.getAttribute("data-index"));
                const kartuTarget = testimonialWadahSlider.children[targetIndex];
                
                if (kartuTarget) {
                    sedangGeserTestimonial = true;
                    const gayaElemen = window.getComputedStyle(testimonialWadahSlider);
                    const jarakGap = parseFloat(gayaElemen.gap) || 0;
                    const posisiScroll = targetIndex * (kartuTarget.offsetWidth + jarakGap);
                    const scrollMaksimal = testimonialWadahSlider.scrollWidth - testimonialWadahSlider.clientWidth;
                    
                    testimonialWadahSlider.scrollTo({
                        left: Math.min(posisiScroll, scrollMaksimal),
                        behavior: "smooth"
                    });
                    
                    updateTestimonialTitik(targetIndex);
                    
                    setTimeout(() => { sedangGeserTestimonial = false; }, 600);
                }
            });
        });

        /* Counter Animation */
        const counterElement = document.getElementById("studentCounter");
        if (counterElement) {
            const target = parseInt(counterElement.getAttribute("data-target"));
            const duration = 2000; /* 2 seconds */
            
            const animateCounter = () => {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    
                    /* Ease out expo for smooth slow down at the end */
                    const easeOutProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                    const currentCount = Math.floor(easeOutProgress * target);
                    
                    /* Format number with dot separator */
                    counterElement.innerText = currentCount.toLocaleString('id-ID');
                    
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        counterElement.innerText = target.toLocaleString('id-ID'); /* ensure exact final number */
                    }
                };
                window.requestAnimationFrame(step);
            };

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter();
                        obs.unobserve(entry.target); /* only animate once */
                    }
                });
            }, { threshold: 0.5 }); /* trigger when 50% visible */

            observer.observe(counterElement);
        }
    });
</script>
