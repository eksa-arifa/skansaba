




<div>
<x-carousel.index/>


<div class="w-screen py-16 overflow-x-hidden" x-data="{more: false}">
    <div class="flex flex-col md:flex-row justify-center gap-10 overflow-hidden">
        <img data-aos="fade-right" width="350" class="max-h-[350px] h-[350px]" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/1.png" alt="kepala sekolah">
        <div class="md:w-[600px] w-full px-10" data-aos="fade-left">
            <div class="border-b-2 border-blue-600">
                <h2 class="text-4xl">Raharjo, S.IP, M.Pd</h2>
                <p>Kepala Sekolah SMKN 1 Bantul</p>
            </div>
            <div class="w-full relative">
                <p
                    class="w-full relative overflow-hidden py-3 after:w-full after:absolute after:bottom-0 after:left-0 after:h-36 after:from-white after:to-transparent" :class="{'h-[280px]': !more, 'h-[670px]': more, 'after:bg-transparent': more, 'after:bg-gradient-to-t': !more}">
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
                <a x-on:click="more = !more" class="py-3 px-9 cursor-pointer text-nowrap bg-blue-600 text-white rounded-full absolute left-1/2 translate-x-[-50%] hover:bg-blue-700 bottom-0"><span x-show="!more">Show More</span><span x-show="more">Show Less</span></a>
            </div>
        </div>
    </div>
</div>

<div class="w-screen py-16 px-10 md:px-36 overflow-hidden">
    <div class="w-full overflow-hidden">
        <h1 class="text-3xl underline decoration-blue-600" data-aos="fade-right">Berita Terbaru</h1>
        <div class="flex flex-col md:flex-row gap-4 overflow-hidden">
            <div class="w-full md:w-1/2 h-[470px] shadow-lg my-5 rounded-lg overflow-hidden" data-aos="zoom-in-right">
                <img class="w-full h-[350px] object-cover" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_0137.jpg?resize=1500,1500&strip=info" alt="news">
                <a class="p-4 block cursor-pointer hover:text-blue-600 w-full whitespace-nowrap overflow-hidden text-ellipsis text-lg">Siswa SMKN 1 Bantul tersenyum lebar bersama teman temannya hahaha lucu yaa</a>
                <p class="text-gray-500 px-4">Di upload 20 jam yang lalu oleh SMKN 1 Bantul</p>
            </div>
            <div class="flex w-full md:w-1/2 flex-col gap-3 my-5" data-aos="zoom-in-left">
                <h2 class="text-2xl underline decoration-blue-600">Berita lainnya</h2>
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

<div class="w-screen py-4 bg-blue-600 text-white overflow-hidden">
    <div class="relative w-full overflow-hidden">
        <div class="scroll-container flex justify-center py-8 overflow-hidden">
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








<div class="w-screen py-16 px-10 md:px-36 overflow-hidden">

<h1 class="text-center text-3xl underline decoration-blue-600">Media</h1>

<div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-8 overflow-hidden">
    <div class="grid gap-4">
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_0137.jpg?resize=1500,2000&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_0684.jpg?resize=1500,1250&strip=info" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9487.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/sny01713.jpg?resize=1500,2000&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9696.jpg?resize=1500,1250&strip=info" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/07/img_9834.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/sny01713.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/sny01713.jpg?resize=1500,2000&strip=info" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,1250&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,2000&strip=info" alt="">
        </div>
        <div data-aos="fade-up">
            <img class="h-auto max-w-full rounded-lg" src="https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/img_9885.jpg?resize=1500,1250&strip=info" alt="">
        </div>
    </div>
</div>
<a href="" class="py-3 px-9 mx-auto cursor-pointer bg-blue-600 text-white rounded-full hover:bg-blue-700 w-fit block">Show More</a>

</div>
</div>



