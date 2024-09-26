<div>
    <div class="mb-4">
        <h1 class="text-xl font-bold uppercase underline decoration-blue-600">Berita Baru</h1>
    </div>
    <div class="">

        <form wire:submit="submit" class="flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <label for="title">Title</label>
                <input type="text" wire:model="title" required
                    class="px-4 py-2 w-full outline-none rounded-md border-gray-500 border">
                @error('title') {{$message}} @enderror
            </div>
            <div wire:ignore>
                <textarea wire:model="content" id="summernote" required></textarea>
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
            callbacks: {
                onChange: function(contents, $editable){
                    @this.set('content', contents)
                }
            }
        });
    </script>

</div>