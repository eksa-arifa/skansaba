<div class="w-screen py-4 px-10 md:px-36 bg-blue-600 overflow-hidden">
    <div class="relative w-full">
        <h1 class="text-center text-white font-bold text-3xl">Prestasi Terbaru</h1>
        <div class="flex justify-center py-8 flex-wrap gap-8 md:gap-4">
            @foreach ($achievments as $item)

                @if ($item->ranking == 1)

                    <div class="relative w-[240px] h-[300px]">
                        <div
                            class="absolute -top-3 bg-yellow-400 w-[35px] h-[35px] font-bold rounded-full left-1/2 -translate-x-1/2 text-white z-20 flex justify-center items-center">
                            {{$item->ranking}}
                        </div>
                        <div
                            class="w-full h-full rounded-lg overflow-hidden bg-gradient-to-tl from-yellow-300 to-purple-600 shadow-lg relative">
                            <div
                                class="w-[95%] h-[95%] rounded-lg absolute bg-white overflow-hidden z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group">
                                <img src="/storage/{{$item->image}}"
                                    class="w-full h-full object-cover group-hover:scale-125 transition-all duration-500" alt="">
                                <div
                                    class="absolute left-0 -bottom-full group-hover:bottom-0 transition-all duration-500 w-full p-4 bg-[rgba(255,243,77,0.3)] text-center flex flex-col items-center">
                                    <span class="font-bold text-white">{{$item->name}}</span>
                                    <span class="text-white text-sm font-bold">{{$item->class}}</span>
                                    <span class="text-white text-sm">{{$item->competition_field}}</span>
                                    <span class="text-white text-sm font-bold">Juara {{$item->ranking}}</span>
                                    <span class="text-white text-sm">Tingkat {{$item->level}}</span>
                                </div>
                            </div>
                            <div
                                class="w-[100%] h-[100%] bg-gradient-to-br from-yellow-300 bg-purple-600 origin-center animate-pulse">
                            </div>
                        </div>
                    </div>
                @elseif($item->ranking == 2)

                    <div class="relative w-[240px] h-[300px]">
                        <div
                            class="absolute -top-3 bg-gray-400 w-[35px] h-[35px] font-bold rounded-full left-1/2 -translate-x-1/2 text-white z-20 flex justify-center items-center">
                            {{$item->ranking}}
                        </div>
                        <div class="w-full h-full rounded-lg overflow-hidden bg-gray-400 shadow-lg relative">
                            <div
                                class="w-[95%] h-[95%] rounded-lg absolute bg-white overflow-hidden z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group">
                                <img src="/storage/{{$item->image}}"
                                    class="w-full h-full object-cover group-hover:scale-125 transition-all duration-500" alt="">
                                <div
                                    class="absolute left-0 -bottom-full group-hover:bottom-0 transition-all duration-500 w-full p-4 bg-[rgba(0,0,0,0.3)] text-center flex flex-col items-center">
                                    <span class="font-bold text-white">{{$item->name}}</span>
                                    <span class="text-white text-sm font-bold">{{$item->class}}</span>
                                    <span class="text-white text-sm">{{$item->competition_field}}</span>
                                    <span class="text-white text-sm font-bold">Juara {{$item->ranking}}</span>
                                    <span class="text-white text-sm">Tingkat {{$item->level}}</span>
                                </div>
                            </div>
                            <div class="w-[100%] h-[100%] bg-gray-400 origin-center animate-pulse">
                            </div>
                        </div>
                    </div>

                @elseif($item->ranking == 3)
                    <div class="relative w-[240px] h-[300px]">
                        <div
                            class="absolute -top-3 bg-orange-900 w-[35px] h-[35px] font-bold rounded-full left-1/2 -translate-x-1/2 text-white z-20 flex justify-center items-center">
                            {{$item->ranking}}
                        </div>
                        <div class="w-full h-full rounded-lg overflow-hidden bg-orange-900 shadow-lg relative">
                            <div
                                class="w-[95%] h-[95%] rounded-lg absolute bg-white overflow-hidden z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group">
                                <img src="/storage/{{$item->image}}"
                                    class="w-full h-full object-cover group-hover:scale-125 transition-all duration-500" alt="">
                                <div
                                    class="absolute left-0 -bottom-full group-hover:bottom-0 transition-all duration-500 w-full p-4 bg-[rgba(0,0,0,0.3)] text-center flex flex-col items-center">
                                    <span class="font-bold text-white">{{$item->name}}</span>
                                    <span class="text-white text-sm font-bold">{{$item->class}}</span>
                                    <span class="text-white text-sm">{{$item->competition_field}}</span>
                                    <span class="text-white text-sm font-bold">Juara {{$item->ranking}}</span>
                                    <span class="text-white text-sm">Tingkat {{$item->level}}</span>
                                </div>
                            </div>
                            <div class="w-[100%] h-[100%] bg-orange-900 origin-center animate-pulse">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>