<li class="px-5">
                    <a href="{{$href ?? ''}}">
                        <div
                            class="text-white font-bold text-center icon float-left sm:group-hover:float-left" :class="{'sm:float-none': !isActiveNavbar, 'sm:float-left': isActiveNavbar}">
                            <i class="{{$icon ?? ''}}"></i>
                        </div>
                        <div
                            class="text-white pl-3 block text-nowrap cap text-ellipsis overflow-hidden sm:group-hover:block" :class="{'sm:hidden': !isActiveNavbar, 'sm:block': isActiveNavbar}">
                            @isset($slot)
                            {{$slot}}
                            @endisset    
                        </div>
                    </a>
                </li>