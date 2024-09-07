<nav class="w-screen absolute top-0 left-0 z-50 bg-none px-8 md:px-16 py-8 md:py-2" x-data="{active : false, isDesktop: false, checkWidth(){this.active = window.innerWidth > 768; if(window.innerWidth > 768){this.isDesktop = true}else{this.isDesktop = false}}}" @resize.debounce.100.window="checkWidth()" x-init="checkWidth()" x-on:click.away="if(!isDesktop){active = false}">
    <div class="flex justify-between items-center">
        <a href="" class="flex items-center gap-2">
            <x-logo />
            <span class="font-bold text-lg text-white text-nowrap hidden lg:block">{{config('app.name')}}</span>
        </a>
        <ul class="flex gap-2 fixed left-0 top-0 flex-col bg-white md:bg-transparent h-screen md:h-fit md:overflow-visible md:w-fit shadow-lg py-4 md:flex-row md:static md:shadow-none md:gap-10 md:text-white overflow-hidden transition-all" :class="{'w-[50%]': active, 'w-0': !active}">
            <x-nav.link href="">Beranda</x-link>
            <x-nav.link href="">Tentang</x-link>
            <x-nav.link href="">Berita</x-link>
            <x-nav.link href="">Prestasi</x-link>
            <x-nav.dropdown>
                <x-slot:title>
                    Lainnya
                </x-slot:title>
                <x-nav.linkdropdown href="">Sarana Prasarana</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Visi & Misi</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Download</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Ekstrakurikuler</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Organisasi</x-nav.linkdropdown>
            </x-nav.dropdown>
        </ul>
        <a x-on:click="active = !active" class="md:hidden text-white">
            <i class="fa-solid" :class="{'fa-x': active, 'fa-bars': !active}"></i>
        </a>
    </div>
</nav>

