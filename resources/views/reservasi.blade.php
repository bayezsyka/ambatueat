<x-app-layout>
    <!-- Hero Section -->
    <div class="py-20 bg-amber-50">
        <div class="container mx-auto px-4 text-center mt-16 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Reservasi</h1>
            <div class="w-24 h-1.5 bg-amber-500 mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Pesan tempat Anda sekarang dan nikmati pengalaman bersantap yang tak terlupakan
            </p>
        </div>
    </div>

    <!-- Reservation Form -->
    <div class="container mx-auto px-4 py-16 max-w-4xl">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <form action="{{ route('reservasi') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama -->
                    <div>
                        <label for="name" class="block text-gray-800 font-semibold mb-2">Nama</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all duration-300" 
                            placeholder="Masukkan nama Anda" 
                            required
                        >
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <label for="date" class="block text-gray-800 font-semibold mb-2">Tanggal</label>
                        <input 
                            type="date" 
                            id="date" 
                            name="date" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all duration-300" 
                            required
                        >
                    </div>

                    <!-- Jam -->
                    <div>
                        <label for="time" class="block text-gray-800 font-semibold mb-2">Jam</label>
                        <input 
                            type="time" 
                            id="time" 
                            name="time" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all duration-300" 
                            required
                        >
                    </div>

                    <!-- Jumlah Tamu -->
                    <div>
                        <label for="guests" class="block text-gray-800 font-semibold mb-2">Jumlah Tamu</label>
                        <input 
                            type="number" 
                            id="guests" 
                            name="guests" 
                            min="1" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all duration-300" 
                            placeholder="Masukkan jumlah tamu" 
                            required
                        >
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label for="phone" class="block text-gray-800 font-semibold mb-2">Nomor Telepon</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all duration-300" 
                            placeholder="Masukkan nomor telepon" 
                            required
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-800 font-semibold mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-5001 transition-all duration-300" 
                            placeholder="Masukkan email Anda" 
                            required
                        >
                    </div>

                    <!-- Kontak (Opsional, misalnya WhatsApp atau lainnya) -->
                    <div class="md:col-span-2">
                        <label for="contact" class="block text-gray-800 font-semibold mb-2">Kontak Tambahan (Opsional)</label>
                        <input 
                            type="text" 
                            id="contact" 
                            name="contact" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all duration-300" 
                            placeholder="Masukkan kontak tambahan (misalnya WhatsApp)"
                        >
                    </div>

                    <!-- Catatan -->
                    <div class="md:col-span-2">
                        <label for="notes" class="block text-gray-800 font-semibold mb-2">Catatan (Opsional)</label>
                        <textarea 
                            id="notes" 
                            name="notes" 
                            rows="4" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all duration-300" 
                            placeholder="Tambahkan catatan khusus (misalnya alergi atau permintaan tempat)"
                        ></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8 text-center">
                    <button 
                        type="submit" 
                        class="bg-amber-500 text-white font-semibold text-lg px-8 py-3 rounded-full hover:bg-amber-600 transition-all duration-300 shadow-md hover:shadow-lg"
                    >
                        Submit Reservasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>