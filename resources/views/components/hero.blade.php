{{-- hero section --}}
<section
    id="hero"
    class="bg-primary-8 bg-no-repeat bg-center bg-cover overflow-hidden"
    style="background-image: url('{{ asset('assets/images/hero/hero-bgt.webp') }}');"
    aria-label="Hero - Tempat Terbaik Belajar Bahasa Inggris">

    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- kiri: teks dan tombol cta --}}
            <div class="flex flex-col justify-center py-ev-5 md:py-ev-8 text-center md:text-left">

                {{-- headline utama --}}
                <h1 class="text-white font-bold leading-snug text-3xl md:text-4xl lg:text-ev-h1 mb-5">
                    Tempat Terbaik Belajar Bahasa Inggris Langsung Praktik
                </h1>

                {{-- sub-teks --}}
                <p class="text-white text-ev-body md:text-ev-body-lg mt-ev-5 mb-ev-7 leading-relaxed">
                    Konsultasikan rencana belajarmu dan dapatkan penawaran spesial langsung dari admin!
                </p>

                {{-- tombol cta --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start items-center">
                    {{-- daftar sekarang --}}
                    <a href="#daftar"
                       id="btn-daftar-sekarang"
                       class="inline-flex items-center justify-center gap-2 bg-warning-7 hover:bg-yellow-500 text-white font-semibold text-[15px] px-8 py-3 rounded-xl transition-all hover:shadow-lg hover:-translate-y-0.5 w-full max-w-[300px] sm:w-auto">
                        <img src="{{ asset('assets/icons/like-icons.svg') }}" alt="" class="w-5 h-5" aria-hidden="true">
                        Daftar Sekarang
                    </a>

                    {{-- chat admin sekarang --}}
                    <a href="https://wa.me/6281234567890"
                       id="btn-chat-admin"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 bg-transparent hover:bg-white/10 text-white font-semibold text-[15px] px-8 py-3 rounded-xl border border-white transition-all hover:shadow-lg hover:-translate-y-0.5 w-full max-w-[300px] sm:w-auto">
                        {{-- whatsapp icon --}}
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Chat Admin Sekarang
                    </a>
                </div>
            </div>

            {{-- kanan: gambar hero --}}
            <div class="flex justify-center md:justify-end items-end mt-8 md:mt-0">
                <img
                    src="{{ asset('assets/images/hero/top.webp') }}"
                    alt="Pelajar Englishvit"
                    class="max-w-full h-auto max-h-[350px] md:max-h-[500px] object-contain object-bottom"
                    loading="eager">
            </div>

        </div>
    </div>
</section>
