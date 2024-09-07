<li class="py-3 w-full md:w-fit relative" x-data="{isOpen: false}">
                <a x-on:click="isOpen = !isOpen" x-on:click.away="isOpen = false" class="px-5 md:px-0 flex gap-2 justify-between w-full items-center cursor-pointer">
                    <span>{{$title}}</span>
                    <i class="fa-solid" :class="{'fa-chevron-left': !isOpen, 'fa-chevron-down': isOpen}"></i>
                </a>
                <ul class="flex flex-col gap-2 py-3 md:absolute md:right-0 md:top-[100%] md:shadow-lg md:bg-white text-black" x-show="isOpen">
                    {{$slot}}
                </ul>
</li>