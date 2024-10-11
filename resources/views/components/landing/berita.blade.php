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