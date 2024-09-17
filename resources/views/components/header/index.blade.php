<header class="w-screen h-[400px] flex justify-center items-center relative">
    <h1 class="text-4xl text-white absolute w-full h-full flex justify-center text-center items-center z-10 px-10 md:px-28">
        {{$slot}}
    </h1>
    <img src="{{$src??'https://upload.wikimedia.org/wikipedia/commons/b/b6/Front_view_of_SMKN_1_Bantul.jpg'}}" alt="banner" class="absolute top-0 left-0 w-screen h-full object-cover brightness-50">
    <div class="bottom-0 bg-blue-600 left-0 absolute max-w-full z-20">
        <div class="text-white text-lg flex items-center gap-3 h-full px-8 py-4 bg-blue-800 w-fit max-w-full"><a href="/">Home</a> <span class="text-sm">>></span><h3 class="text-white text-nowrap overflow-hidden text-ellipsis">{{$slug ?? $slot}}</h3></div>
    </div>
</header>