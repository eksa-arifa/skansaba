<li class="{{$class ?? ''}}">
    <a href="{{$href ?? ''}}">
        <div class="text-white block text-nowrap cap px-7 sm:group-hover:block" :class="{'sm:hidden': !isActiveNavbar, 'sm:block': isActiveNavbar}">
                @isset($slot)
                {{$slot}}
                @endisset
        </div>
        <div class="text-white text-center hidden small-cap sm:group-hover:hidden" :class="{'sm:block': !isActiveNavbar, 'sm:hidden': isActiveNavbar}"><i
                class="{{$icon ?? ''}}"></i></div>
    </a>
</li>