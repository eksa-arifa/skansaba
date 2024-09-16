<div>
    <x-header.index slug="DetailBerita" src="{{$berita->attachment->path}}">
        {{$berita->title}}
    </x-header.index>
    <div class="w-screen min-h-screen py-10 px-8 md:px-36">
        <div class="flex flex-col gap-8">
            <div class="font-bold text-gray-600 flex justify-between text-sm">
                <span>Uploaded {{$berita->created_at->diffForHumans()}}</span>
                <span>By SMKN 1 BANTUL</span>
            </div>
            <p>
                {{$berita->content}}
            </p>
        </div>
    </div>
</div>