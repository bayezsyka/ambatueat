<x-app-layout>
    <!-- Hero Section -->
    <div class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center mt-16 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Menu Spesial</h1>
            <div class="w-24 h-1.5 bg-amber-500 mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Nikmati hidangan autentik dengan cita rasa khas yang memanjakan lidah
            </p>
        </div>
    </div>

    <!-- Featured Menu -->
    <div class="container mx-auto px-4 max-w-4xl mb-16">
        <div class="rounded-2xl overflow-hidden shadow-xl bg-white">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="h-96">
                    <img 
                        src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/77ae5f81-8406-4dcf-b502-c8d5bd088937_Go-Biz_20201026_035356.jpeg" 
                        alt="Nasi Ayam Bali Crispy" 
                        class="w-full h-full object-cover"
                    >
                </div>
                <div class="p-8 flex flex-col justify-center">
                    <span class="text-amber-500 font-medium mb-2">Menu Unggulan</span>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Nasi Ayam Bali Crispy</h2>
                    <p class="text-gray-600 text-lg mb-4">
                        Ayam krispi dengan bumbu Bali, nasi pulen, sambal matah, dan lalapan.
                    </p>
                    <p class="text-amber-600 font-semibold text-xl">Rp 35.000</p>
                    <div class="flex items-center gap-2 text-amber-500 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L15.09 8.26 22 9.27 17 14.14 18.18 21.01 12 17.77 5.82 21.01 7 14.14 2 9.27 8.91 8.26 12 2z"/>
                        </svg>
                        <span class="font-medium">Pilihan Terfavorit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Grid -->
    <div class="container mx-auto px-4 py-16 max-w-4xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Menu Item 1 -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="h-64 mb-4">
                    <img 
                        src="/api/placeholder/400/320" 
                        alt="Soto Tauco Pekalongan" 
                        class="w-full h-full object-cover rounded-lg"
                    >
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Soto Tauco Pekalongan</h3>
                <p class="text-gray-600 mb-4">
                    Soto bening dengan daging sapi, tauge, dan tauco khas Pekalongan.
                </p>
                <p class="text-amber-600 font-semibold text-lg">Rp 25.000</p>
            </div>

            <!-- Menu Item 2 -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="h-64 mb-4">
                    <img 
                        src="/api/placeholder/400/320" 
                        alt="Nasi Megono" 
                        class="w-full h-full object-cover rounded-lg"
                    >
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Nasi Megono</h3>
                <p class="text-gray-600 mb-4">
                    Nasi dengan nangka muda, kelapa parut, dan rempah tradisional.
                </p>
                <p class="text-amber-600 font-semibold text-lg">Rp 20.000</p>
            </div>

            <!-- Menu Item 3 -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="h-64 mb-4">
                    <img 
                        src="/api/placeholder/400/320" 
                        alt="Pindang Tetel" 
                        class="w-full h-full object-cover rounded-lg"
                    >
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Pindang Tetel</h3>
                <p class="text-gray-600 mb-4">
                    Daging sapi empuk dalam kaldu bening dengan rempah Jawa Tengah.
                </p>
                <p class="text-amber-600 font-semibold text-lg">Rp 30.000</p>
            </div>

            <!-- Menu Item 4 -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="h-64 mb-4">
                    <img 
                        src="/api/placeholder/400/320" 
                        alt="Garang Asem Ayam" 
                        class="w-full h-full object-cover rounded-lg"
                    >
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Garang Asem Ayam</h3>
                <p class="text-gray-600 mb-4">
                    Ayam dengan belimbing wuluh dan rempah dalam daun pisang.
                </p>
                <p class="text-amber-600 font-semibold text-lg">Rp 28.000</p>
            </div>

            <!-- Menu Item 5 -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="h-64 mb-4">
                    <img 
                        src="/api/placeholder/400/320" 
                        alt="Es Dawet Ireng" 
                        class="w-full h-full object-cover rounded-lg"
                    >
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Es Dawet Ireng</h3>
                <p class="text-gray-600 mb-4">
                    Cendol hitam dengan santan, gula merah, dan es serut.
                </p>
                <p class="text-amber-600 font-semibold text-lg">Rp 15.000</p>
            </div>
        </div>
    </div>
</x-app-layout>