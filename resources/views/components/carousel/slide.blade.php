<li class="glide__slide w-screen h-screen relative">
    <div class="absolute w-full h-full top-0 left-0">
        <img src="{{$src}}" class="h-full w-full object-cover" alt="test">
        <div class="absolute top-0 left-0 w-full h-full bg-black z-20 bg-opacity-30 flex justify-center font-['Montserrat'] items-center flex-col px-5 md:px-0">
            {{$slot}}
        </div>
    </div>
</li>