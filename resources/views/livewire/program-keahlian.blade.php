@section('title')
Program Keahlian
@endsection
<div>
    <x-header.index>
        Program Keahlian
    </x-header.index>
    <div class="w-screen min-h-screen p-8">
        <div class="flex flex-wrap md:flex-nowrap justify-center md:justify-start items-center gap-6 w-full">
            <img class="w-[350px] h-[400px] object-cover" src="{{$major->image ?? ''}}" alt="Jurusan">
            <div class="flex flex-col gap-5 min-h-[400px] w-auto">
                <h1 class="uppercase text-xl font-bold border-b-2 border-gray-400">Program Keahlian {{$major->title}}</h1>
                <div id="no-tailwind">
                    {!!$major->description!!}
                </div>
            </div>
        </div>
    </div>
</div>