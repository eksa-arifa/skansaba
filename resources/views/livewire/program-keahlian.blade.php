@section('title')
Program Keahlian
@endsection
<div>
    <x-header.index>
        Program Keahlian
    </x-header.index>
    <div class="w-screen min-h-screen p-8">
        <div class="flex flex-wrap items-center justify-center gap-6 w-full p-5 border-gray-500 border-2">
            <img class="w-[350px] h-[400px] object-cover" src="{{$major->image ?? ''}}" alt="Jurusan">
            <div class="flex flex-col gap-5 h-[400px] w-[350px]">
                <h1 class="uppercase text-xl font-bold border-b-2 border-gray-400">Program Keahlian {{$major->name}}</h1>
                <p>
                    {{$major->description}}
                </p>
            </div>
        </div>
        <div class="w-full p-5 border-2 border-gray-500 mt-3">
            <h1 class="uppercase text-xl font-bold">Materi Yang Diajarkan</h1>
            <div class="w-full mt-3 flex flex-wrap gap-2">
                @forelse($major->lessons as $item)
                <div class="p-4 bg-gray-400 text-white">Pemrogramman berorientasi objek</div>
                @empty
                <div>Materi Kosong</div>
                @endforelse
            </div>
        </div>
    </div>
</div>