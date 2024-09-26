<ul class="flex flex-col gap-7 py-5 overflow-y-auto no-scrollbar">
                <li class="px-5">
                    <div class="text-white block text-nowrap font-bold cap sm:group-hover:block" :class="{'sm:hidden': !isActiveNavbar, 'sm:block': isActiveNavbar}">{{$title}}
                    </div>
                    <div class="text-white hidden text-center small-cap sm:group-hover:hidden" :class="{'sm:block': !isActiveNavbar, 'sm:hidden': isActiveNavbar}">...</div>
                </li>
                @isset($slot)
                {{$slot}}
                @endisset
            </ul>






