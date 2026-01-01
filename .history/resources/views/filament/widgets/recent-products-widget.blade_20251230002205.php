<div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Produk Terbaru</h3>
        <p class="text-sm text-gray-500 mt-1">Daftar 5 produk terbaru yang ditambahkan</p>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Nama Produk</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Kategori</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Harga</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Ditambahkan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($products as $product)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-gray-900 font-medium">{{ $product['name'] }}</td>
                        <td class="px-6 py-4 text-gray-600">
                            <span class="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded text-xs font-medium">
                                {{ $product['category'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-900 font-semibold">{{ $product['price'] }}</td>
                        <td class="px-6 py-4 text-gray-500 text-xs">{{ $product['created_at'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                            <p class="text-sm">Belum ada produk</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
        <a href="{{ route('filament.admin.resources.products.index') }}" class="text-pink-600 text-sm font-semibold hover:text-pink-700 transition">
            Lihat Semua Produk →
        </a>
    </div>
</div>
