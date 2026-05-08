@php
    $faqs = [
        [
            'question' => 'Apa itu Englishvit?',
            'answer' => 'Englishvit adalah institusi dibawah naungan PT Sinergi Insan Andalan yang bergerak pada industri education technology yang secara spesifik mengembangkan pelatihan kemampuan bahasa Inggris aktif dengan metode praktikal dan aplikatif.'
        ],
        [
            'question' => 'Sejak kapan Englishvit didirikan?',
            'answer' => 'Englishvit mulai beroperasi sejak September 2018, sampai saat ini kami sudah membantu lebih dari 100.000 students mengakselerasi skill bahasa Inggris aktif mereka dengan lima layanan utama (Live Class, Learning Package, One on One English, Certification Test dan Englishvit Store).'
        ],
        [
            'question' => 'Mengapa saya harus kursus di Englishvit?',
            'answer' => 'Belajar di Englishvit akan memberikan pengalaman yang berbeda, karena kami mengusung model pembelajaran aplikatif dan terapan. Kamu belajar berkomunikasi menggunakan bahasa Inggris, bukan menghafal rumus dan rumus lagi. <b>No more theories, let\'s practice!</b>'
        ],
        [
            'question' => 'Bagaimana sistem pembelajaran di Englishvit?',
            'answer' => 'Dalam "<b>Practical Learning</b>" di Englishvit, terdapat dua pilihan sistem pembelajaran yang dapat disesuaikan dengan kebutuhan. Belajar dengan pendampingan tutor (live class) dan belajar mandiri (self learning) dengan materi pembelajaran yang telah disediakan englishvit dalam bentuk video tutorial, eBook dan kuis.'
        ],
        [
            'question' => 'Apa itu "Practical Learning?"',
            'answer' => 'Merupakan model pembelajaran yang memberikan kesempatan siswa untuk praktik lebih banyak dengan fokus hasil akhir bisa berkomunikasi langsung secara aktif dengan speaking dan writing sesuai dengan keperluan mereka.'
        ],
        [
            'question' => 'Bisakah saya percaya dengan kualitas pengajar di Englishvit?',
            'answer' => 'Pengajar-pengajar di Englishvit berlatar belakang pendidikan yang terkorelasi dengan pengajaran bahasa Inggris dan telah berpengalaman mengajar menggunakan bahasa Inggris dalam lingkungan pekerjaan dan pendidikannya. Selain itu, Englishvit juga telah melakukan seleksi yang ketat dan terus melakukan peningkatan kualitas pengajar secara berkala.'
        ],
        [
            'question' => 'Paket belajar bahasa Inggris mana yang tepat untuk saya?',
            'answer' => 'Untuk mengetahui paket belajar yang tepat, kamu perlu mengetahui sejauh mana level kemampuan bahasa Inggrismu sekarang dan apa tujuan belajarmu setelah mengikuti kursus. Hal ini perlu dilakukan untuk memudahkan kamu menyusun rencana belajar dan mengukur peningkatan kemampuan berbahasa. Kamu bisa melihat sejauh mana level kemampuan berbahasa Inggrismu di <a href="https://englishvit.com/testing-system/proficiency-test/351/start" class="text-info-7 font-semibold">sini</a>.'
        ],
        [
            'question' => 'Apa saja paket belajar yang disediakan oleh Englishvit?',
            'answer' => 'Englishvit menyediakan beragam paket belajar, mulai dari paket belajar bahasa Inggris umum sesuai level (Basic, Intermediate, Advanced), dan paket belajar dengan tujuan peningkatan kemampuan yang spesifik (Grammar for Speaking, English Pro, Daily Conversation, dll) yang dikemas dalam program Live Class (dengan pendampingan pengajar), Learning Package (belajar mandiri dengan materi yang telah dirancang oleh tim Englishvit) dan Certification Test (Tes sertifikasi kemampuan bahasa Inggris untuk melengkapi dokumen lamaran pekerjaan dan akademik). Kamu dapat melihat paket programnya di <a href="https://englishvit.com/live-class" class="text-info-7 font-semibold">sini</a>.'
        ],
        [
            'question' => 'Apakah Englishvit merupakan lembaga pendidikan resmi?',
            'answer' => 'Ya, Englishvit telah resmi terdaftar sebagai Lembaga Pendidikan Nonformal dan telah mendapatkan izin operasional dari <b>Dinas Pendidikan</b>. Legalitas kami diterbitkan oleh <b>DPMPTSP</b> (Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu) sebagai lembaga yang sah menjalankan kegiatan pelatihan dan pendidikan di bidang bahasa Inggris.<br><br>📄 Nomor Izin Resmi DPMPTSP: <b>3/IZIN/0021/02/2025</b><br>📅 Tanggal Terbit Izin: <b>28 Januari 2025</b><br><br>Legalitas ini menunjukkan bahwa Englishvit telah memenuhi seluruh persyaratan administratif dan teknis yang ditetapkan pemerintah, serta berkomitmen untuk memberikan layanan pendidikan berkualitas dengan standar yang sesuai regulasi nasional.'
        ],
    ];
@endphp

<section class="py-16 mt-5 md:py-ev-9 bg-primary-1" id="faq">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        {{-- Header --}}
        <div class="text-center mb-10 md:mb-12">
            <h2 class="font-bold text-ev-h3 md:text-ev-h2 text-black-8 mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-sm md:text-base text-black-6 max-w-2xl mx-auto">
                Berikut adalah beberapa pertanyaan umum yang sering diajukan oleh customer kepada Englishvit
            </p>
        </div>

        {{-- FAQ Accordion --}}
        <div class="max-w-[850px] mx-auto space-y-3" x-data="{ active: null }">
            @foreach($faqs as $index => $faq)
                <div class="bg-white rounded-lg shadow-md border border-gray-50 overflow-hidden transition-all duration-300">
                    <button 
                        @click="active !== {{ $index }} ? active = {{ $index }} : active = null"
                        class="w-full px-5 md:px-7 py-4 md:py-5 text-left flex items-center justify-between group focus:outline-none"
                    >
                        <span 
                            class="font-semibold text-black-7 text-base md:text-lg group-hover:text-info-7 transition-colors duration-200"
                            :class="active === {{ $index }} ? 'text-info-7' : ''"
                        >
                            {{ $faq['question'] }}
                        </span>
                        
                        <div 
                            class="shrink-0 w-7 h-7 md:w-8 md:h-8 rounded-full bg-info-7 flex items-center justify-center text-white transition-all duration-300 shadow-sm"
                            :class="active === {{ $index }} ? 'bg-black-3' : ''"
                        >
                            {{-- Plus Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 md:w-5 md:h-5 transition-transform duration-300">
                                {{-- Horizontal line (always visible) --}}
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                {{-- Vertical line (hides on active) --}}
                                <line x1="12" y1="5" x2="12" y2="19" class="transition-all duration-300 origin-center" :class="active === {{ $index }} ? 'scale-y-0 opacity-0' : 'scale-y-100 opacity-100'"></line>
                            </svg>
                        </div>
                    </button>

                    <div 
                        x-show="active === {{ $index }}" 
                        x-collapse
                        x-cloak
                    >
                        <div class="px-5 md:px-7 pb-5 md:pb-6 text-black-6 text-base leading-relaxed border-t border-gray-50 pt-4">
                            {!! $faq['answer'] !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
