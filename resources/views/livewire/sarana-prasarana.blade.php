@section('title')
Sarana Prasarana
@endsection
<div>
    <x-header.index>
        Sarana Prasarana
    </x-header.index>
    <div class="w-screen min-h-screen py-8 px-8 md:px-28">


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($infrastructures as $item)
                    
                    <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-20">
                            {{$loop->index + 1}}
                        </th>
                        <th scope="row" class="px-6 py-4">
                            {{$item->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$item->count}}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-4">Sarana Prasarana kosong</td>
                    </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
        <div class="my-4">
            {{$infrastructures->links()}}
        </div>

    </div>
</div>