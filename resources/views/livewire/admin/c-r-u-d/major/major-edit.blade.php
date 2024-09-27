<div>
    <div class="mb-4">
        <h1 class="text-xl font-bold uppercase underline decoration-blue-600">Major Edit</h1>
    </div>
    <div class="">

        <form wire:submit="edit" class="flex flex-col gap-4">
            <div class="max-w-sm">
                <div x-data="{ imagePreview: '{{$major->image}}' }" class="">
                    <!-- Input untuk Upload Gambar -->
                    <input type="file" class="hidden" wire:model="image" x-ref="image" @change="
            const file = $refs.image.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        ">

                    <div class="flex flex-col gap-1">
                        <label for="">Image Attachment</label>
                        <button @click.prevent="$refs.image.click()"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Upload Image
                        </button>
                    </div>

                    <!-- Preview Gambar -->
                    <template x-if="imagePreview">
                        <div class="relative">
                            <img :src="imagePreview"
                                class="rounded-lg w-full h-60 object-cover shadow-lg border-4 border-indigo-300">
                            <button @click="imagePreview = ''"
                                class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-700">
                                X
                            </button>
                        </div>
                    </template>

                    @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                @if ($image)
                    <div class="mt-4">
                        <p class="text-gray-700">File yang di-upload: {{ $image->getClientOriginalName() }}</p>
                    </div>
                @endif
            </div>
            <div class="flex flex-col gap-1">
                <label for="title">Title</label>
                <input type="text" wire:model="name" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Title...">
                @error('title') {{$message}} @enderror
            </div>
            <div wire:ignore>
                <textarea wire:model="description" id="summernote" required>{{$major->description}}</textarea>
            </div>
            @error('content') {{$message}} @enderror



            <button type="submit" class="w-fit px-4 py-2 bg-blue-600 text-white rounded-lg">Edit</button>
        </form>

    </div>

    <script>
        $('#summernote').summernote({
            placeholder: 'Cuaca yang cerah',
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['codeview']]
            ],
            callbacks: {
                onChange: function (contents, $editable) {
                    @this.set('description', contents)
                }
            }
        });
    </script>

</div>