<div>
    <div class="mb-4">
        <h1 class="text-xl font-bold uppercase underline decoration-blue-600">Berita Baru</h1>
    </div>
    <div class="">

        <form action="{{route('admin.berita.create.post')}}" enctype="multipart/form-data" class="flex flex-col gap-4" method="post">
            @csrf
            <div class="max-w-sm">
                <div x-data="{ image: null, previewImage(event) { 
        const file = event.target.files[0]; 
        if (file) { 
            const reader = new FileReader(); 
            reader.onload = (e) => this.image = e.target.result; 
            reader.readAsDataURL(file); 
        } else { 
            this.image = null; 
        } 
    } }" class="flex flex-col w-72">

                    <label for="">Attachment</label>

                    <input type="file" name="image" @change="previewImage" accept="image/*"
                        class="block my-2 w-full">

                    <div
                        class="w-full h-72 border-2 border-gray-300 flex items-center justify-center bg-gray-200 rounded-md overflow-hidden">
                        <template x-if="image">
                            <img :src="image" alt="Image Preview" class="object-contain w-full h-full">
                        </template>
                        <template x-if="!image">
                            <span class="text-gray-500">Gambar akan muncul di sini</span>
                        </template>
                    </div>
                    @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                
            </div>
            <div class="flex flex-col gap-1">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{old('title')}}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Title...">
                @error('title') {{$message}} @enderror
            </div>
            <div wire:ignore>
                <textarea name="content" id="summernote" required>{{old('content')}}</textarea>
            </div>
            @error('content') {{$message}} @enderror



            <button type="submit" class="w-fit px-4 py-2 bg-blue-600 text-white rounded-lg">Submit</button>
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
        });
    </script>

</div>