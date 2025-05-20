<div class="mx-auto p-6 ">
    <h2 class="text-lg md:text-2xl font-bold text-gray-800 mb-8 border-b pb-2">Tambah Artikel </h2>

    <form wire:submit.prevent='store' class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Judul Artikel -->
        <div class="col-span-1">
            <label class="block mb-1 font-medium text-gray-700">Judul Artikel</label>
                <input wire:model.defer='title' type="text" placeholder="Contoh: Cara Menghafal Cepat" 
                    class="py-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm" />
                    
                @error('title')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
        </div>

        <!-- Kategori -->
        <div class="col-span-1">
            <label class="block mb-1 font-medium text-gray-700">Kategori</label>
            <select wire:model.defer='selectedCategory' class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 shadow-sm">
                <option value="">Pilih Kategori</option>
                <option>Pendidikan</option>
                <option>Kegiatan</option>
                <option>Tips</option>
                <option>Kajian</option>
            </select>
            
            @error('title')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Status -->
        <div class="col-span-1">
            <label class="block mb-1 font-medium text-gray-700">Status</label>
            <select wire:model.defer='status' class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 shadow-sm">
                <option value="">Pilih Status</option>
                <option value="draft">Draft</option>
                <option value="publish">Published</option>
                <option value="archive">Archived</option>
            </select>
            
            @error('status')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Thumbnail -->
        <div class="col-span-1">
            <label class="block mb-1 font-medium text-gray-700">Upload Cover</label>
            <input wire:model='cover_path' type="file" 
                class="w-full border border-gray-300 rounded-lg px-4 py-2 file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0 file:text-sm file:font-semibold
                file:bg-green-50 file:text-green-700 hover:file:bg-green-100" />
                
            @error('cover_path')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Konten Artikel -->
        <div class="col-span-1 md:col-span-2" wire:ignore>
            <label class="block mb-1 font-medium text-gray-700">Isi Artikel</label>
            <textarea wire:model.defer='content' rows="8" id="content-article" placeholder="Tulis konten artikel..." 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 shadow-sm"></textarea>
            @error('content')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <!-- Tombol Simpan -->
        <div class="col-span-1 md:col-span-2">
            <button type="submit" 
                class="inline-flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-all shadow-md">
                <i class="fas fa-save"></i> Simpan Artikel
            </button>
        </div>
    </form>
</div>

@push('scripts')
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#content-article',
            plugins: 'link lists image preview',
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright | outdent indent | link image',

            
            setup: function (editor) {
                // Set isi awal dari Livewire ke editor
                // editor.on('init', function () {
                //     editor.setContent(@json($content));
                // });

                // Saat ada perubahan di TinyMCE, update Livewire property
                editor.on('Change KeyUp', function () {
                    @this.set('content', editor.getContent());
                });
            }
            
        });
    </script>
@endpush