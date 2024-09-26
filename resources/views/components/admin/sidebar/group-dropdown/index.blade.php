<li class="px-5 hidden-list" id="hidden-list" x-data="{isHiddenListActive: false}">
                    <a href="#" x-on:click="isHiddenListActive = !isHiddenListActive"
                        class="collappse flex items-center sm:group-hover:flex sm:items-center" :class="{'sm:block': !isActiveNavbar, 'sm:flex': isActiveNavbar}">
                        <div class="text-white font-bold text-center icon sm:group-hover:float-left" :class="{'sm:float-none': !isActiveNavbar, 'sm:float-left': isActiveNavbar}">
                            <i class="{{$icon ?? ''}}"></i>
                        </div>
                        <div
                            class="text-white pl-3 block text-nowrap cap text-ellipsis overflow-hidden sm:group-hover:block" :class="{'sm:hidden': !isActiveNavbar, 'sm:block': isActiveNavbar}">
                            {{$title}}</div>
                      <i
                            class="fa-solid block sm:hidden cap text-white ml-2 arrow transition-all sm:group-hover:block" :class="{'sm:hidden': !isActiveNavbar, 'sm:block': isActiveNavbar, 'fa-chevron-left': !isHiddenListActive, 'fa-chevron-down': isHiddenListActive}"></i>
                    </a>
                    <ul class="hidden flex-col gap-7 py-7 hidden-list" :class="{'hidden': !isHiddenListActive, 'flex': isHiddenListActive}">
                        @isset($slot)
                        {{$slot}}
                        @endisset
                    </ul>
                </li>