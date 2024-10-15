@section('title')
Download
@endsection
<div>
    <x-header.index>
        Download
    </x-header.index>
    <div class="w-screen min-h-screen py-16 px-8 md:px-28">
        <div class="wfull">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                File
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Upload
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ukuran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link Download
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($downloads as $item)

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$loop->index + 1}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$item->title}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$item->created_at}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ round(Storage::disk('public')->size($item->file_path)/1024)}} Kb
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/storage/{{$item->file_path}}"
                                        target="_blank"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Download</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>