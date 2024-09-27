<div x-data="{isActiveNavbar: false}">
    <div class="group" x-data="{isSmollNavbarActive: false}" x-on:click.away="isSmollNavbarActive = false">
        <div
            class="sidebar sm:group-hover:w-[225px] transition-all w-screen h-[70px] fixed top-0 left-0 z-50 bg-slate-700 p-5 sm:py-5 sm:px-0 flex justify-between sm:justify-center items-center gap-5 border-b-2 border-slate-600" :class="{'sm:w-[70px]': !isActiveNavbar, 'sm:w-[225px]': isActiveNavbar}">
            <a href="#" class="text-white block sm:hidden" id="smoll-bar" x-on:click="isSmollNavbarActive = !isSmollNavbarActive">
                <i class="fa-solid fa-bars"></i>
            </a>
            <div class="flex justify-center items-center w-full">
                <img class="w-[40px]"
                    src="https://upload.wikimedia.org/wikipedia/id/thumb/0/0f/SMK_Negeri_1_Bantul_logo.png/210px-SMK_Negeri_1_Bantul_logo.png"
                    alt="logo">
                <h1 class="text block text-white font-bold text-2xl sm:group-hover:block ml-2" :class="{'sm:hidden': !isActiveNavbar, 'sm:block': isActiveNavbar}">SMEA</h1>
            </div>
            <div id="dropdownDelayButton" data-dropdown-toggle="dropdownDelayMobile" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-white block sm:hidden" type="button">
                <img class="w-[50px] h-[40px] rounded-full" src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-600nw-1677509740.jpg" alt="">
            </div>
        </div>
        <div id="dropdownDelayMobile" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
              <li>
                <a href="{{route('admin.settings')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
              </li>
              <li>
                <livewire:admin.auth.logout/>
              </li>
            </ul>
        </div>
        <div
            class="sidebar smoll fixed transition-all sm:left-0 top-[70px] h-screen max-h-screen w-[225px] bg-slate-700 z-50 flex flex-col sm:group-hover:w-[225px]" :class="{'sm:w-[70px]': !isActiveNavbar, 'sm:w-[225px]': isActiveNavbar, '-left-[225px]': !isSmollNavbarActive, 'left-0': isSmollNavbarActive}">
            <x-admin.sidebar.group title="Menu Utama">
                <x-admin.sidebar.item icon="fa-solid fa-chart-area" href="{{route('admin.dashboard')}}">
                    Dashboard
                </x-admin.sidebar.item>
                <x-admin.sidebar.item icon="fa-solid fa-newspaper" href="{{route('admin.berita')}}">
                    Berita
                </x-admin.sidebar.item>
                <x-admin.sidebar.item icon="fa-solid fa-handshake" href="{{route('admin.major')}}">
                    Major
                </x-admin.sidebar.item>
                
            </x-admin.sidebar.group>

        </div>
    </div>

    <div
        class="fixed top-0 z-40 left-0 w-screen h-[70px] flex bg-blue-600">
        <div class="space transition-all" :class="{'w-[70px]': !isActiveNavbar, 'w-[225px]': isActiveNavbar}"></div>
        <div class="flex justify-between items-center px-5">
            <a href="#" class="text-white absolute z-50" id="bars" x-on:click="isActiveNavbar = !isActiveNavbar">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
        <div id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-white absolute right-2 z-50 top-1/2 -translate-y-1/2 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center gap-2" type="button">
            <img class="w-[40px] h-[40px] rounded-full object-cover" src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-600nw-1677509740.jpg" alt="">
        </div>
        <!-- Dropdown menu -->
        <div id="dropdownDelay" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
              <li>
                <a href="{{route('admin.settings')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
              </li>
              <li>
                <livewire:admin.auth.logout/>
              </li>
            </ul>
        </div>




    </div>

    <section class="mt-[70px] py-[25px] px-[30px] transition-all min-h-screen" :class="{'sm:ml-[70px]': !isActiveNavbar, 'sm:ml-[225px]': isActiveNavbar}">
        @isset($slot)
            {{ $slot }}
        @endisset
    </section>
</div>