<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <!-- Hero Section -->
  <section class="relative min-h-screen flex items-center justify-center bg-[url('https://images.unsplash.com/photo-1471282465966-5dd12d0de2e2?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bW91bnR8ZW58MHx8MHx8fDA%3D')] bg-cover bg-center bg-no-repeat">
      <div class=" inset-0 bg-black/40"></div>
      
      <div class="mx-auto px-4 text-center">
          <div class="max-w-4xl mx-auto">
              <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                  <span class="text-amber-300">AmbatuEat</span>
              </h1>
              <div class="w-24 h-1.5 bg-amber-400 mx-auto mb-8"></div>
              <h2 class="text-2xl md:text-3xl font-medium mb-8 text-white">Restoran Khas Pemalang</h2>
              <p class="text-lg md:text-xl mb-12 leading-relaxed text-white/90">
                  Nikmati hidangan autentik Indonesia dalam suasana yang hangat dan nyaman, 
                  diracik dengan rempah pilihan dan resep turun-temurun keluarga kami.
              </p>
              <div class="flex flex-col sm:flex-row justify-center gap-4">
                  <a href="/menu" class="bg-amber-500 hover:bg-amber-600 text-white py-4 px-10 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                      Lihat Menu
                  </a>
                  <a href="/reservasi" class="bg-white/90 hover:bg-white text-amber-900 py-4 px-10 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                      Reservasi Sekarang
                  </a>
              </div>
          </div>
      </div>
  </section>

  <!-- Certification & Reviews Section -->
  <section class="py-16 bg-amber-50">
      <div class="container mx-auto px-4">
          <div class="text-center mb-12">
              <h2 class="text-3xl font-bold text-gray-800 mb-2">Kepercayaan Pelanggan</h2>
              <p class="text-gray-600 max-w-2xl mx-auto">Bukti kualitas dan pelayanan terbaik kami</p>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <!-- Halal Certification -->
              <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-xl transition-all duration-300">
                  <div class="flex justify-center mb-6">
                      <div class="bg-amber-100 p-4 rounded-full inline-flex">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                          </svg>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-3">Sertifikasi Halal</h3>
                  <p class="text-gray-600">Semua bahan dan proses memasak kami telah tersertifikasi halal oleh MUI untuk menjamin kehalalan setiap hidangan.</p>
              </div>
              
              <!-- Google Reviews -->
              <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-xl transition-all duration-300">
                  <div class="flex justify-center mb-6">
                      <div class="bg-amber-100 p-4 rounded-full inline-flex">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                          </svg>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-3">4.8/5 di Google</h3>
                  <p class="text-gray-600">Lebih dari 500 ulasan positif dari pelanggan kami dengan rating hampir sempurna di Google Maps.</p>
              </div>
              
              <!-- GoFood Availability -->
              <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-xl transition-all duration-300">
                  <div class="flex justify-center mb-6">
                      <div class="bg-amber-100 p-4 rounded-full inline-flex">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-3">Tersedia di GoFood</h3>
                  <p class="text-gray-600">Pesan melalui GoFood dengan rating 4.9/5. Gratis ongkir dan promo khusus setiap minggu.</p>
              </div>
          </div>
      </div>
  </section>

  <!-- Featured Menu Section -->
  <section id="menu" class="py-16 bg-white">
      <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto text-center mb-12">
              <h2 class="text-3xl font-bold text-gray-800 mb-4">Menu Spesial Kami</h2>
              <div class="w-24 h-1 bg-amber-400 mx-auto mb-8"></div>
              <h3 class="text-5xl font-bold text-gray-600 mb-4">Nasi Ayam Bali Crispy</h3>
              
              <div class="rounded-xl overflow-hidden shadow-lg mb-8 transition-transform duration-300 hover:scale-[1.02]">
                  <img 
                      src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/77ae5f81-8406-4dcf-b502-c8d5bd088937_Go-Biz_20201026_035356.jpeg" 
                      alt="Nasi Ayam Bali Crispy" 
                      class="w-full h-96 object-cover"
                      loading="lazy"
                  >
              </div>
              
              <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto">
                  Ayam krispi dengan balutan bumbu khas Bali yang kaya rempah, disajikan dengan nasi pulen panas, 
                  sambal matah segar, dan lalapan sayuran. Kulit ayam digoreng dengan teknik khusus hingga 
                  menghasilkan tekstur super crispy yang tetap juicy di dalam. Dibumbui dengan base genep Bali 
                  yang autentik.
              </p>
          </div>
      </div>
  </section>

  <!-- Advantages Section -->
  <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
          <div class="text-center mb-12">
              <h2 class="text-3xl font-bold text-gray-800 mb-2">Keunggulan Ambatu Eat</h2>
              <p class="text-gray-600 max-w-2xl mx-auto">Kami selalu berkomitmen untuk memberikan pengalaman bersantap terbaik</p>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              <!-- Advantage 1 -->
              <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg text-center transition-all duration-300">
                  <div class="text-amber-500 text-4xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                  </div>
                  <h3 class="text-lg font-bold mb-2">Bahan Segar</h3>
                  <p class="text-gray-600">Kami hanya menggunakan bahan-bahan terbaik dan segar setiap harinya.</p>
              </div>
              
              <!-- Advantage 2 -->
              <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg text-center transition-all duration-300">
                  <div class="text-amber-500 text-4xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
                  </div>
                  <h3 class="text-lg font-bold mb-2">Chef Berpengalaman</h3>
                  <p class="text-gray-600">Dimasak oleh chef dengan pengalaman lebih dari 15 tahun di bidang kuliner.</p>
              </div>
              
              <!-- Advantage 3 -->
              <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg text-center transition-all duration-300">
                  <div class="text-amber-500 text-4xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                  </div>
                  <h3 class="text-lg font-bold mb-2">Suasana Nyaman</h3>
                  <p class="text-gray-600">Interior modern yang nyaman untuk makan bersama keluarga dan teman.</p>
              </div>
              
              <!-- Advantage 4 -->
              <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg text-center transition-all duration-300">
                  <div class="text-amber-500 text-4xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                      </svg>
                  </div>
                  <h3 class="text-lg font-bold mb-2">Parkir Luas</h3>
                  <p class="text-gray-600">Area parkir yang luas dan aman untuk kendaraan Anda.</p>
              </div>
          </div>
      </div>
  </section>

  <!-- Reservation Section -->
  <section id="reservasi" class="py-16 bg-amber-600">
      <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto text-center text-white">
              <h2 class="text-3xl font-bold mb-4">Reservasi Meja</h2>
              <p class="mb-8 text-white/90">Pastikan Anda mendapatkan tempat terbaik untuk menikmati hidangan kami. Reservasi sekarang!</p>
              <a href="#" class="bg-gray-900 text-white py-3 px-8 rounded-full font-medium inline-block hover:bg-black transition-colors shadow-lg hover:shadow-xl">
                  Reservasi Sekarang
              </a>
          </div>
      </div>
  </section>

 
</x-app-layout>