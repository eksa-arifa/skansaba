<li class="glide__slide w-screen h-screen relative">
    <div class="absolute w-full h-full top-0 left-0">
        <img src="{{$src}}" class="h-full w-full object-cover brightness-50" alt="test">
        <div class="absolute bottom-28 left-1/2 -translate-x-1/2 -translate-y-1/2 w-fit h-fit flex justify-center font-['Montserrat'] items-center flex-col px-5 md:px-0">
            {{$slot}}
        </div>
    </div>
</li>