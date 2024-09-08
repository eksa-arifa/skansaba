@extends('layouts.app')

@section('content')


<div id="default-carousel" class="relative w-full h-screen" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="absolute top-0 left-0 w-full h-full z-10 overflow-hidden">
        <!-- Item 1 -->
        <div class="hidden duration-1000 ease-in-out" id="carousel-1" data-carousel-item>
            <div class="absolute z-20 top-0 left-0 w-full h-full flex justify-center items-center">
                <div class="overflow-hidden">
                    <h1
                        class="text-white text-xl w-64 md:w-fit text-center md:text-4xl font-['Montserrat'] carousel-text-first">
                        SELAMAT DATANG DI SMKN 1 BANTUL
                    </h1>
                </div>
            </div>
            <img src="https://skansaba.dev/images/slider_1.JPG"
                class="absolute block brightness-50 w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-1000 ease-in-out" id="carousel-2" data-carousel-item>
            <div class="absolute z-20 top-0 left-0 w-full h-full flex justify-center items-center">
                <div class="overflow-hidden">
                    <h1
                        class="text-white text-xl w-64 md:w-fit text-center md:text-4xl font-['Montserrat'] carousel-text">
                        <!-- Wrap each letter in a span for individual animation -->
                        SEKOLAH PUSAT KEUNGGULAN
                    </h1>
                </div>
            </div>
            <img src="https://skansaba.dev/images/slider_1.JPG"
                class="absolute block brightness-50 w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-1000 ease-in-out" id="carousel-3" data-carousel-item>
            <div class="absolute z-20 top-0 left-0 w-full h-full flex justify-center items-center">
                <div class="overflow-hidden">
                    <h1
                        class="text-white text-xl w-64 md:w-fit text-center md:text-4xl font-['Montserrat'] carousel-text">
                        <!-- Wrap each letter in a span for individual animation -->
                        CENTER OF EXCELLENCE SCHOOL
                    </h1>
                </div>
            </div>
            <img src="https://skansaba.dev/images/slider_1.JPG"
                class="absolute block brightness-50 w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-1000 ease-in-out" id="carousel-4" data-carousel-item>
            <div class="absolute z-20 top-0 left-0 w-full h-full flex justify-center items-center">
                <div class="overflow-hidden">
                    <h1
                        class="text-white text-xl w-64 md:w-fit text-center md:text-4xl font-['Montserrat'] carousel-text">
                        <!-- Wrap each letter in a span for individual animation -->
                        SMK BISA HEBAT
                    </h1>
                </div>
            </div>
            <img src="https://skansaba.dev/images/slider_1.JPG"
                class="absolute block brightness-50 w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-1000 ease-in-out" id="carousel-5" data-carousel-item>
            <div class="absolute z-20 top-0 left-0 w-full h-full flex justify-center items-center">
                <div class="overflow-hidden">
                    <h1
                        class="text-white text-xl w-64 md:w-fit text-center md:text-4xl font-['Montserrat'] carousel-text">
                        <!-- Wrap each letter in a span for individual animation -->
                        SKANSABA JAYA
                    </h1>
                </div>
            </div>
            <img src="https://skansaba.dev/images/slider_1.JPG"
                class="absolute block brightness-50 w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute hidden top-0 start-0 z-30 md:flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute hidden top-0 end-0 z-30 md:flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<div class="w-screen py-16" x-data="{more: false}">
    <div class="flex flex-col md:flex-row items-center justify-center gap-10">
        <img width="350" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/1.png" alt="kepala sekolah">
        <div class="md:w-[600px] w-full px-10">
            <div class="border-b-2 border-blue-600">
                <h2 class="text-4xl">Raharjo, S.IP, M.Pd</h2>
                <p>Kepala Sekolah SMKN 1 Bantul</p>
            </div>
            <div class="w-full relative">
                <p
                    class="max-h-[280px] w-full relative overflow-hidden py-3 after:w-full after:absolute after:bottom-0 after:left-0 after:h-36 after:bg-gradient-to-t after:from-white after:to-transparent">
                    Kami dengan bangga menyambut Anda di halaman website resmi sekolah kami. SMKN 1 Bantul adalah tempat
                    di
                    mana semangat belajar dan karakter berkembang bersama. Kami berkomitmen untuk memberikan pendidikan
                    yang
                    berkualitas, mempersiapkan siswa-siswa kami menjadi individu yang cerdas, istimewa, dan
                    berintegritas.
                    <br><br>
                    Cerdas: Di SMKN 1 Bantul, kami mengutamakan pembelajaran yang inovatif dan relevan dengan
                    perkembangan
                    zaman. Kami percaya bahwa pengetahuan dan keterampilan yang diperoleh di sekolah akan membuka pintu
                    kesempatan di masa depan.
                    <br><br>
                    Istimewa: Setiap siswa di sini adalah individu istimewa. Kami menghargai keberagaman, bakat, dan
                    minat
                    yang dimiliki oleh setiap siswa. Bersama-sama, kita menciptakan lingkungan yang inklusif dan penuh
                    semangat.
                    <br><br>
                    Berkarakter: Karakter adalah pondasi dari segala prestasi. Di SMKN 1 Bantul, kami mengajarkan
                    nilai-nilai seperti integritas, tanggung jawab, dan kerjasama. Kami ingin siswa kami tidak hanya
                    pandai
                    dalam akademik, tetapi juga memiliki kepribadian yang kuat.
                    <br><br>
                    Terima kasih telah mengunjungi website kami. Mari bersama-sama menjadikan SMKN 1 Bantul sebagai
                    tempat
                    yang inspiratif dan penuh semangat. Selamat mengeksplorasi informasi yang ada di sini!
                </p>
                <a x-on:click="more = true" class="py-3 px-9 cursor-pointer bg-blue-600 text-white rounded-full absolute bottom-0 left-1/2 translate-x-[-50%] hover:bg-blue-700">Show More</a>
            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 w-screen bg-black z-50 flex justify-center items-center transition-all duration-1000 overflow-hidden" :class="{'h-0': !more, 'h-screen': more}">
        <a x-on:click="more = false" class="text-white text-2xl cursor-pointer absolute right-10 top-10"><i class="fa-solid fa-x"></i></a>
        <div class="md:w-[600px] w-full px-10 text-white">
        Kami dengan bangga menyambut Anda di halaman website resmi sekolah kami. SMKN 1 Bantul adalah tempat
                    di
                    mana semangat belajar dan karakter berkembang bersama. Kami berkomitmen untuk memberikan pendidikan
                    yang
                    berkualitas, mempersiapkan siswa-siswa kami menjadi individu yang cerdas, istimewa, dan
                    berintegritas.
                    <br><br>
                    Cerdas: Di SMKN 1 Bantul, kami mengutamakan pembelajaran yang inovatif dan relevan dengan
                    perkembangan
                    zaman. Kami percaya bahwa pengetahuan dan keterampilan yang diperoleh di sekolah akan membuka pintu
                    kesempatan di masa depan.
                    <br><br>
                    Istimewa: Setiap siswa di sini adalah individu istimewa. Kami menghargai keberagaman, bakat, dan
                    minat
                    yang dimiliki oleh setiap siswa. Bersama-sama, kita menciptakan lingkungan yang inklusif dan penuh
                    semangat.
                    <br><br>
                    Berkarakter: Karakter adalah pondasi dari segala prestasi. Di SMKN 1 Bantul, kami mengajarkan
                    nilai-nilai seperti integritas, tanggung jawab, dan kerjasama. Kami ingin siswa kami tidak hanya
                    pandai
                    dalam akademik, tetapi juga memiliki kepribadian yang kuat.
                    <br><br>
                    Terima kasih telah mengunjungi website kami. Mari bersama-sama menjadikan SMKN 1 Bantul sebagai
                    tempat
                    yang inspiratif dan penuh semangat. Selamat mengeksplorasi informasi yang ada di sini!
        </div>
    </div>
</div>

<div class="w-screen py-16 px-10 md:px-36">
    <div class="w-full">
        <h1 class="text-3xl underline decoration-blue-600">Berita Terbaru</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full md:w-1/2 h-[470px] shadow-lg my-5 rounded-lg overflow-hidden">
                <img class="w-full h-[350px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_0137.jpg?resize=1500,1500&strip=info" alt="news">
                <a class="p-4 block cursor-pointer hover:text-blue-600 w-full whitespace-nowrap overflow-hidden text-ellipsis text-lg">Siswa SMKN 1 Bantul tersenyum lebar bersama teman temannya hahaha lucu yaa</a>
                <p class="text-gray-500 px-4">Di upload 20 jam yang lalu oleh SMKN 1 Bantul</p>
            </div>
            <div class="flex w-full md:w-1/2 flex-col gap-3 my-5">
                <h2 class="text-2xl text-center underline decoration-blue-600">Berita lainnya</h2>
                <ul class="w-full p-4">
                    <li class="w-full border-b-2 py-3 flex flex-col"><a class="hover:text-blue-500 text-xl w-full text-ellipsis text-nowrap overflow-hidden" href="">Berita lainnya 1 jika kamu meras gagal menjadi manusia</a><p class="text-gray-500">Di upload 25 jam yang lalu oleh SMKN 1 Bantul</p></li>
                    <li class="w-full border-b-2 py-3 flex flex-col"><a class="hover:text-blue-500 text-xl w-full text-ellipsis text-nowrap overflow-hidden" href="">Berita lainnya 1 jika kamu meras gagal menjadi manusia</a><p class="text-gray-500">Di upload 25 jam yang lalu oleh SMKN 1 Bantul</p></li>
                    <li class="w-full border-b-2 py-3 flex flex-col"><a class="hover:text-blue-500 text-xl w-full text-ellipsis text-nowrap overflow-hidden" href="">Berita lainnya 1 jika kamu meras gagal menjadi manusia</a><p class="text-gray-500">Di upload 25 jam yang lalu oleh SMKN 1 Bantul</p></li>
                    <li class="w-full border-b-2 py-3 flex flex-col"><a class="hover:text-blue-500 text-xl w-full text-ellipsis text-nowrap overflow-hidden" href="">Berita lainnya 1 jika kamu meras gagal menjadi manusia</a><p class="text-gray-500">Di upload 25 jam yang lalu oleh SMKN 1 Bantul</p></li>
                </ul>
                <a href="" class="py-3 px-9 cursor-pointer bg-blue-600 text-white rounded-full hover:bg-blue-700 w-fit block">Show More</a>
            </div>
        </div>
    </div>
</div>

<div class="w-screen py-4 bg-blue-600 text-white">
    <div class="relative w-full overflow-hidden">
        <div class="scroll-container flex justify-center py-8">
            <!-- First set of images -->
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/3-1.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/4.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/5.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/6.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/7.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/8.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/9.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/10.jpg" alt="konsentrasi keahlian">
            </div>
            
            <!-- Second set of images (duplicate the first set for smooth looping) -->
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/3-1.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/4.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/5.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/6.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/7.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/8.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/9.jpg" alt="konsentrasi keahlian">
            </div>
            <div class="w-[350px] md:w-[225px]">
                <img class="w-full h-[350px] md:h-[250px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/10.jpg" alt="konsentrasi keahlian">
            </div>
        </div>
    </div>
</div>








<div class="w-screen py-16 px-10 md:px-36">

<h1 class="text-center text-3xl underline decoration-blue-600">Media</h1>

<div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-8">
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_0137.jpg?resize=1500,2000&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_0684.jpg?resize=1500,1250&strip=info" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9487.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/sny01713.jpg?resize=1500,2000&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9696.jpg?resize=1500,1250&strip=info" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/07/img_9834.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/sny01713.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/sny01713.jpg?resize=1500,2000&strip=info" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,2000&strip=info" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,1250&strip=info" alt="">
        </div>
    </div>
</div>
<a href="" class="py-3 px-9 mx-auto cursor-pointer bg-blue-600 text-white rounded-full hover:bg-blue-700 w-fit block">Show More</a>

</div>

@endsection