<header class="w-screen h-[400px] flex justify-center items-center relative">
    <h1
        class="text-4xl uppercase text-white absolute w-full font-semibold h-full flex justify-center text-center items-center z-10 px-10 md:px-28">
        {{$slot}}
    </h1>
    <img src="{{$src ?? 'https://upload.wikimedia.org/wikipedia/commons/b/b6/Front_view_of_SMKN_1_Bantul.jpg'}}"
        alt="banner" class="absolute top-0 left-0 w-screen h-full object-cover brightness-50">
    <div class="bottom-0 bg-blue-600 left-0 absolute w-full max-w-full z-20 uppercase">
        <div class="text-white text-lg flex items-center gap-3 h-full px-8 py-4 bg-blue-800 w-fit max-w-full"><a
                href="/">Home</a>
            <h3 class="text-white text-nowrap overflow-hidden text-ellipsis">
                @foreach (explode('/', url()->current()) as $item)
                            @if($loop->index > 2)
                                        @php
                                            $l = $loop->index;
                                        @endphp
                                        <i class="fa-solid fa-chevron-right mr-2"></i>
                                        @php
                                        $url = ""
                                        @endphp
                                        @foreach(explode('/', url()->current()) as $i)  @php  $k = $loop->index @endphp @if($k > 2) @if($k > $l) @php break @endphp @else @php $url .= '/'.$i @endphp @endif @endif @endforeach
                                        <a href="{{$url}}">{{$item}}</a>
                            @endif
                @endforeach
            </h3>
        </div>
    </div>
</header>