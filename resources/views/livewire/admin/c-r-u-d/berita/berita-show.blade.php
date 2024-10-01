<div>
    <div class="mb-4">
        <h1 class="text-xl font-bold uppercase underline decoration-blue-600">Berita</h1>
    </div>
    <div class="">

        <div class="flex items-center justify-between w-full py-3">

            <form class="max-w-md">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." required />
                </div>
            </form>

            <a href="{{route('admin.berita.create')}}" class="px-5 py-2 bg-blue-600 text-white rounded-lg">
                <i class="fa-solid fa-plus"></i>
            </a>

        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Uploaded By
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($berita as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$loop->index + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{$item->title}}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{$item->attachment->path}}" alt="Image" width="100">
                            </td>
                            <td class="px-6 py-4">
                                {{$item->user->name}}
                            </td>
                            <td class="px-6 py-4 flex items-center gap-2">
                                <a href="{{route('admin.berita.edit', ["id"=>$item->id])}}" class="block text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <livewire:admin.c-r-u-d.berita.berita-delete :id="$item->id" />
                            </td>
                        </tr>
                    @empty

                        <tr>
                            <td colspan="5" class="text-center py-4">
                                Table is empty
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </table>

            {{$berita->links()}}
        </div>

    </div>
</div>