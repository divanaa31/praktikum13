<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-5 border-b border-gray-200 bg-gradient-to-r from-rose-50 to-transparent">
        <h3 class="text-lg font-bold text-gray-900">Produk Terbaru</h3>
        <p class="text-sm text-gray-500 mt-1">Daftar 5 produk terbaru yang ditambahkan</p>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50/50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left font-bold text-gray-700 text-xs uppercase tracking-wider">Nama Produk</th>
                    <th class="px-6 py-4 text-left font-bold text-gray-700 text-xs uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-4 text-left font-bold text-gray-700 text-xs uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-4 text-left font-bold text-gray-700 text-xs uppercase tracking-wider">Ditambahkan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($products as $product)
                    <tr class="hover:bg-rose-50/30 transition-colors">
                        <td class="px-6 py-4 text-gray-900 font-semibold">{{ $product['name'] }}</td>
                        <td class="px-6 py-4 text-gray-600">
                            <span class="inline-block bg-rose-100 text-rose-700 px-3 py-1 rounded-lg text-xs font-semibold">
                                {{ $product['category'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-900 font-bold">{{ $product['price'] }}</td>
                        <td class="px-6 py-4 text-gray-500 text-xs">{{ $product['created_at'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-10 text-center">
                            <p class="text-gray-500 font-medium">Belum ada produk</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-200 flex justify-end">
        <a href="{{ route('filament.admin.resources.products.index') }}" class="text-rose-600 text-sm font-bold hover:text-rose-700 transition inline-flex items-center gap-1">
            Lihat Semua Produk
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</div>
