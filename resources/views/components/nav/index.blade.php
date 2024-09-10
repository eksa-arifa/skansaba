<nav 
    class="w-screen fixed top-0 left-0 z-50 px-8 md:px-16 transition-all duration-300"
    x-data="{active: false, isDesktop: false, isTop: true, checkWidth() {this.isDesktop = window.innerWidth >= 768;}, checkScroll() {this.isTop = window.scrollY === 0;}}" 
    @resize.debounce.100.window="checkWidth()" 
    @scroll.window="checkScroll()" 
    x-init="checkWidth(); checkScroll()"
    x-on:click.away="if(!isDesktop){active = false}"
    :class="{'bg-white text-black shadow-lg': !isTop, 'bg-transparent text-white': isTop && isDesktop}"
    :style="isTop ? 'padding-top: 24px; padding-bottom: 24px;' : 'padding-top: 8px; padding-bottom: 8px;'"
>
    <div class="flex justify-between items-center">
        <a href="" class="flex items-center gap-2">
            <x-logo />
            <span class="font-bold text-lg text-nowrap hidden lg:block">
                {{ config('app.name') }}
            </span>
        </a>
        <ul class="flex gap-2 fixed left-0 top-0 flex-col bg-white md:bg-transparent h-screen md:h-fit md:overflow-visible md:w-fit shadow-lg py-4 md:flex-row md:static md:shadow-none md:gap-6 overflow-hidden transition-all" 
            :class="{'w-[80%]': active, 'w-0': !active}">
            <x-nav.link href="">Beranda</x-nav.link>
            <x-nav.dropdown>
                <x-slot:title>
                    Profil Sekolah
                </x-slot:title>
                <x-nav.linkdropdown href="">Sejarah</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Visi & Misi</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Struktur Organisasi</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Denah Lokasi</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Sarana Prasarana</x-nav.linkdropdown>
            </x-nav.dropdown>
            <x-nav.dropdown>
                <x-slot:title>
                    Fitur
                </x-slot:title>
                <x-nav.linkdropdown href="">Download</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Berita dan informasi</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Gallery foto</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Gallery video</x-nav.linkdropdown>
            </x-nav.dropdown>
            <x-nav.dropdown>
                <x-slot:title>
                    Program Keahlian
                </x-slot:title>
                <x-nav.linkdropdown href="">Akuntansi</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Layanan Perbankan Syariah(LPS)</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Manajemen Perkantoran(MP)</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Bisnis Retail(BR)</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Bisnis Digital(BD)</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Desain Komunikasi Visual(DKV)</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Rekayasa Perangkat Lunak(RPL)</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Teknik Komputer Dan Jaringan(TKJ)</x-nav.linkdropdown>
            </x-nav.dropdown>
            <x-nav.dropdown>
                <x-slot:title>
                    PPDB
                </x-slot:title>
                <x-nav.linkdropdown href="">PPDB 2024</x-nav.linkdropdown>
            </x-nav.dropdown>
            <x-nav.dropdown>
                <x-slot:title>
                    Lainnya
                </x-slot:title>
                <x-nav.linkdropdown href="">Ekstrakurikuler</x-nav.linkdropdown>
                <x-nav.linkdropdown href="">Organisasi Siswa</x-nav.linkdropdown>
            </x-nav.dropdown>
        </ul>
        <a x-on:click="active = !active" class="md:hidden" 
           :class="{'text-black': active || !isTop, 'text-white': isTop && !active}">
            <i class="fa-solid" :class="{'fa-x': active, 'fa-bars': !active}"></i>
        </a>
    </div>
</nav>
