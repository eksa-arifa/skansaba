@section('title')
Berita
@endsection
<div>
    <x-header.index>
        Berita & Informasi
    </x-header.index>
    <div class="w-screen min-h-screen py-10 px-10 md:px-36">
        <div class="flex flex-wrap justify-center gap-5">

            @forelse ($berita as $item)


                <div
                    class="w-full md:w-[300px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{route('berita.detail', ["slug"=>$item->slug])}}">
                        <img class="rounded-t-lg"
                            src="/storage/{{$item->attachment->path}}"
                            alt="berita" />
                    </a>
                    <div class="p-5 flex flex-col">
                        <a href="{{route('berita.detail', ["slug"=>$item->slug])}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white whitespace-nowrap overflow-hidden text-ellipsis">{{$item->title}}</h5>
                        </a>

                        <span class="mt-6 text-gray-600">{{$item->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            @empty

            <div class="flex w-full justify-center">
                <span class="text-lg">Berita Kosong</span>
            </div>

            @endforelse
        </div>
        <div class="py-10">
            {{$berita->links()}}
        </div>
    </div>
</div>