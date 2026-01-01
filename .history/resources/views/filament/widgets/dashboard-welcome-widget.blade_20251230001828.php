<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg shadow-lg p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold">📊 Kategori</p>
                <p class="text-3xl font-bold text-pink-600 mt-2">{{ $stats['total_categories'] }}</p>
                <p class="text-gray-500 text-xs mt-1">Total kategori produk</p>
            </div>
            <div class="text-5xl opacity-20">📦</div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg shadow-lg p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold">🛍️ Produk</p>
                <p class="text-3xl font-bold text-pink-600 mt-2">{{ $stats['total_products'] }}</p>
                <p class="text-gray-500 text-xs mt-1">Total produk tersedia</p>
            </div>
            <div class="text-5xl opacity-20">🎁</div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg shadow-lg p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold">👥 User</p>
                <p class="text-3xl font-bold text-pink-600 mt-2">{{ $stats['total_users'] }}</p>
                <p class="text-gray-500 text-xs mt-1">Total pengguna aktif</p>
            </div>
            <div class="text-5xl opacity-20">👤</div>
        </div>
    </div>
</div>
