




<div>
<x-carousel.index/>


<div class="w-screen py-16 px-10 md:px-36 overflow-x-hidden" x-data="{more: false}">
    <div class="flex flex-col md:flex-row justify-center gap-4">
        <img data-aos="fade-right" width="350" class="max-h-[350px] h-[350px] mx-auto md:mx-0 object-cover rounded-lg" src="/assets/images/kepsek.jpeg" alt="kepala sekolah">
        <div class="md:w-[600px] w-full" data-aos="fade-left">
            <div class="border-b-2 border-blue-600">
                <h2 class="text-4xl">Raharjo, S.IP, M.Pd</h2>
                <p>Kepala Sekolah SMKN 1 Bantul</p>
            </div>
            <div class="w-full relative">
                <p
                    class="w-full relative overflow-hidden py-3 after:w-full after:absolute after:bottom-0 after:left-0 after:h-36 after:from-white after:to-transparent" :class="{'h-[280px]': !more, 'h-fit': more, 'after:bg-transparent': more, 'after:bg-gradient-to-t': !more}">
                    Assalamualaikum warahmatullahi wabarakatuh,  
Salam sejahtera bagi kita semua.

Saya, Raharjo, M.Pd., Kepala SMK Negeri 1 Bantul, dengan bangga menyampaikan visi dan misi sekolah kami, yaitu mencetak lulusan yang unggul, berkompeten, dan siap bersaing di dunia global. Visi ini kami wujudkan melalui pendidikan yang berbasis pada penguatan karakter, keterampilan, dan penguasaan teknologi. Kami percaya bahwa dengan pendidikan yang berkualitas, kami dapat menyiapkan generasi yang siap menghadapi tantangan masa depan, baik di dunia kerja, wirausaha, maupun pendidikan tinggi.
<br><br>

Di SMK Negeri 1 Bantul, kami menerapkan pembelajaran yang memanusiakan hubungan, memahami konsep, membangun keberlanjutan, memilih tantangan, dan memberdayakan konteks. Dengan pendekatan ini, kami berupaya menciptakan siswa yang tidak hanya cerdas secara akademik, tetapi juga memiliki karakter yang sesuai dengan Profil Pelajar Pancasila. Kami ingin siswa mampu berkolaborasi, berinovasi, dan berkontribusi positif dalam masyarakat.

Harapan besar kami adalah lulusan SMK Negeri 1 Bantul menjadi generasi yang siap kerja di dunia industri, siap berwirausaha dengan ide-ide kreatifnya, serta siap melanjutkan pendidikan ke jenjang yang lebih tinggi. Kami percaya, dengan dukungan semua pihak, cita-cita ini dapat terwujud, dan lulusan kami akan menjadi kebanggaan bangsa. Teruslah belajar, berinovasi, dan berkontribusi untuk masa depan yang lebih baik. 

Wassalamualaikum warahmatullahi wabarakatuh.
                </p>
                <a x-on:click="more = !more" class="py-3 px-9 cursor-pointer text-nowrap bg-blue-600 text-white rounded-full absolute left-1/2 translate-x-[-50%] hover:bg-blue-700 bottom-0" :class="{'-bottom-14': more}"><span x-show="!more">Show More</span><span x-show="more">Show Less</span></a>
            </div>
        </div>
    </div>
</div>

<div class="w-screen py-16 px-10 md:px-36 overflow-hidden">
    <div class="w-full overflow-hidden">
        <h1 class="text-3xl underline decoration-blue-600" data-aos="fade-right">Berita Terbaru</h1>
        @if($berita != "")
        <div class="flex flex-col md:flex-row gap-4 overflow-hidden">
            <div class="w-full md:w-1/2 h-[470px] shadow-lg my-5 rounded-lg overflow-hidden" data-aos="zoom-in-right">
                <img class="w-full h-[350px] object-cover" src="{{$berita->attachment->path}}" alt="news">
                <a class="p-4 block cursor-pointer hover:text-blue-600 w-full whitespace-nowrap overflow-hidden text-ellipsis text-lg" href="{{route('berita.detail', ["slug"=>$berita->slug])}}">{{$berita->title}}</a>
                <p class="text-gray-500 px-4">{{$berita->created_at->diffForHumans()}} By {{$berita->user->name}}</p>
            </div>
            <div class="flex w-full md:w-1/2 flex-col gap-3 my-5" data-aos="zoom-in-left">
                <h2 class="text-2xl underline decoration-blue-600">Berita lainnya</h2>
                <ul class="w-full p-4">
                    
                    @forelse($beritas as $item)
                    <li class="w-full border-b-2 py-3 flex flex-col"><a class="hover:text-blue-500 text-xl w-full text-ellipsis text-nowrap overflow-hidden" href="{{route('berita.detail', ["slug"=>$item->slug])}}">{{$item->title}}</a><p class="text-gray-500">{{$item->created_at->diffForHumans()}} By {{$berita->user->name}}</p></li>
                    @empty
                    <div class="w-full flex justify-center items-center h-[300px]">
                        <span>Berita lainnya tidak ditemukan</span>
                    </div>
                    @endforelse
                </ul>
                @if(!$beritas->isEmpty())
                <a href="{{route('berita.index')}}" class="py-3 px-9 cursor-pointer bg-blue-600 text-white rounded-full hover:bg-blue-700 w-fit block">Show More</a>
                @endif
            </div>
        </div>

        @else

        <div class="w-full flex justify-center items-center h-[400px]">
            <span>Berita Tidak Ditemukan</span>
        </div>


        @endif
    </div>
</div>

<div class="w-screen py-4 px-10 md:px-36 bg-blue-600 overflow-hidden">
    <div class="relative w-full">
        <div class="flex justify-center py-8 flex-wrap gap-2">
        </div>
    </div>
</div>



<div class="w-screen py-16 px-10 md:px-36 overflow-hidden">
    <h1 class="text-center text-3xl underline decoration-blue-600">Kerjasama</h1>
    <div class="flex flex-wrap gap-3 w-full justify-center items-center py-8">
        <x-sponsorImage.index src="/assets/images/akademikom.png"/>
        <x-sponsorImage.index src="/assets/images/ambarukmo.png"/>
        <x-sponsorImage.index src="/assets/images/ameya.png"/>
        <x-sponsorImage.index src="/assets/images/amikom.png"/>
        <x-sponsorImage.index src="/assets/images/ampta.jpg"/>
        <x-sponsorImage.index src="/assets/images/duta.png"/>
        <x-sponsorImage.index src="/assets/images/gmedia.jpg"/>
        <x-sponsorImage.index src="/assets/images/janabadra.png"/>
        <x-sponsorImage.index src="/assets/images/mirota.png"/>
        <x-sponsorImage.index src="/assets/images/msd.png"/>
        <x-sponsorImage.index src="/assets/images/profidana.png"/>
        <x-sponsorImage.index src="/assets/images/pt_time_excelindo_logo.jpeg"/>
        <x-sponsorImage.index src="/assets/images/sejong.jpg"/>
        <x-sponsorImage.index src="/assets/images/semar.jpg"/>
        <x-sponsorImage.index src="/assets/images/seven.png"/>
        <x-sponsorImage.index src="/assets/images/stikom.jpeg"/>
        <x-sponsorImage.index src="/assets/images/uad.png"/>
        <x-sponsorImage.index src="/assets/images/mercubuana.png"/>
        <x-sponsorImage.index src="/assets/images/unjani.png"/>
        <x-sponsorImage.index src="/assets/images/ust.png"/>
        <x-sponsorImage.index src="/assets/images/ut.png"/>
        <x-sponsorImage.index src="/assets/images/utdi.png"/>
        <x-sponsorImage.index src="/assets/images/uty.png"/>
        <x-sponsorImage.index src="/assets/images/maspion.jpeg"/>
    </div>
</div>




<div class="w-screen py-16 px-10 md:px-36 overflow-hidden">

<h1 class="text-center text-3xl underline decoration-blue-600">Media</h1>

<div class="flex gap-4 py-10 justify-center items-center flex-wrap">
    <x-media-card.index href="https://www.youtube.com/@officialsmkn1bantul" logo="youtube"/>
    <x-media-card.index href="https://instagram.com/smkn1bantul" logo="instagram"/>
    <x-media-card.index href="https://x.com/skansaba_id" logo="twitter"/>
    <x-media-card.index href="https://tiktok.com/@skansaba.id" logo="tiktok"/>
</div>

</div>
</div>



