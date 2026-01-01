<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="bg-gradient-to-r from-pink-400 to-pink-600 px-6 py-4">
        <h3 class="text-white text-xl font-bold">📋 Produk Terbaru</h3>
        <p class="text-pink-100 text-sm">Daftar 5 produk terbaru yang ditambahkan</p>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-3 font-semibold text-gray-700">Nama Produk</th>
                    <th class="px-6 py-3 font-semibold text-gray-700">Kategori</th>
                    <th class="px-6 py-3 font-semibold text-gray-700">Harga</th>
                    <th class="px-6 py-3 font-semibold text-gray-700">Ditambahkan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($this->getRecentProducts() as $product)
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $product['name'] }}</td>
                        <td class="px-6 py-4 text-gray-600">
                            <span class="inline-block bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $product['category'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 font-semibold text-pink-600">{{ $product['price'] }}</td>
                        <td class="px-6 py-4 text-gray-500 text-xs">{{ $product['created_at'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                            <p class="text-lg">📭 Belum ada produk</p>
                            <p class="text-sm">Tambahkan produk untuk melihat di sini</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="bg-gray-50 px-6 py-4 border-t">
        <a href="{{ route('filament.admin.resources.products.index') }}" class="text-pink-600 font-semibold hover:text-pink-700 transition">
            Lihat Semua Produk →
        </a>
    </div>
</div>
