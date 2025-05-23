<div class="p-6 space-y-6">
    <div class="flex justify-between items-center">
        <h2 class="text-lg md:text-2xl font-semibold text-gray-800">Manajemen Artikel</h2>
        <a href="{{ route('admin.article.create') }}" class="bg-green-600 hover:bg-green-700 transition-colors text-white px-3 py-2.5 rounded-lg shadow flex items-center gap-2 text-sm">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>

    <div class="bg-white rounded-xl shadow p-5">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Cari Artikel</label>
                <div class="relative">
                    <input type="text" wire:model.live='search' placeholder="Cari judul artikel..." 
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                    <option value="">Semua Kategori</option>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="kegiatan">Kegiatan</option>
                    <option value="tips">Tips</option>
                    <option value="kajian">Kajian</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select wire:model.live='status' class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                    <option value="">Semua Status</option>
                    <option value="publish">Published</option>
                    <option value="draft">Draft</option>
                    <option value="archive">Archived</option>
                </select>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full divide-y divide-gray-200 text-sm overflow-x-auto">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-6 py-3 text-left w-1/4">Judul Artikel</th>
                    <th class="px-6 py-3 text-left">Penulis</th>
                    <th class="px-6 py-3 text-left">Tanggal</th>
                    <th class="px-6 py-3 text-left">Status</th>
                    <th class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <!-- Repeat this row for each article -->
                @forelse ($articles as $article)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <img src="{{ Storage::url($article->cover_path) }}"
                                    class="w-1/3 rounded-md object-cover" alt="Artikel">
                                <div>
                                    <div class="font-medium text-gray-900">{{ $article->title }}</div>
                                    <div class="text-gray-500 text-xs">15 Juni 2023</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-700">{{ $article->author->name }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ Carbon\Carbon::parse($article->created_at)->format('d M Y H:i:s') }}</td>
                        <td class="px-6 py-4">
                            @php
                                if ($article->status == 'draft') 
                                {
                                    $color = 'yellow';
                                    $label = 'Draft';
                                }
                                elseif ($article->status == 'publish') 
                                {
                                    $color = 'blue';
                                    $label = 'Published';
                                }
                                else 
                                {
                                    $color = 'gray';
                                    $label = 'Archived';
                                }
                                
                            @endphp
                            <span class="inline-block px-2 py-1 rounded-full bg-{{ $color }}-100 text-{{ $color }}-800 text-xs font-semibold">
                                {{ $label }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-blue-600 transition" title="Lihat">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-yellow-600 transition" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-red-600 transition" title="Hapus">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-center" colspan="8">
                            Tidak ada artikel
                        </td>
                    </tr>
                @endforelse
                <!-- Tambahkan baris lain sesuai data artikel -->
            </tbody>
        </table>
        <div class="mt-3 p-3">
            {{ $articles->links() }}
        </div>
    </div>
</div>
