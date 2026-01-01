<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-gradient-to-br from-rose-50 to-rose-100 rounded-xl shadow-sm border border-rose-200 p-6 hover:shadow-md transition-shadow">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-rose-600 text-xs font-bold uppercase tracking-wider">Total Kategori</p>
                <p class="text-3xl font-bold text-rose-900 mt-3">{{ $this->getStats()['total_categories'] }}</p>
                <p class="text-rose-500 text-xs mt-2 font-medium">kategori produk</p>
            </div>
            <div class="w-14 h-14 bg-white/50 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-rose-50 to-rose-100 rounded-xl shadow-sm border border-rose-200 p-6 hover:shadow-md transition-shadow">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-rose-600 text-xs font-bold uppercase tracking-wider">Total Produk</p>
                <p class="text-3xl font-bold text-rose-900 mt-3">{{ $this->getStats()['total_products'] }}</p>
                <p class="text-rose-500 text-xs mt-2 font-medium">produk tersedia</p>
            </div>
            <div class="w-14 h-14 bg-white/50 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m0 0l8 4m-8-4v10l8 4m0-10l8 4m-8-4v10M8 7l8 4"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-rose-50 to-rose-100 rounded-xl shadow-sm border border-rose-200 p-6 hover:shadow-md transition-shadow">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-rose-600 text-xs font-bold uppercase tracking-wider">Total User</p>
                <p class="text-3xl font-bold text-rose-900 mt-3">{{ $this->getStats()['total_users'] }}</p>
                <p class="text-rose-500 text-xs mt-2 font-medium">pengguna terdaftar</p>
            </div>
            <div class="w-14 h-14 bg-white/50 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 12H9m6 0a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>
