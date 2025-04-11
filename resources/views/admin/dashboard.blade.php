@extends('layouts.admin')

@section('content')
<div class="py-8 px-4 sm:px-6 lg:px-8">
    <div class="mb-8 text-center">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white">📥 Dashboard Reservasi</h1>
        <p class="text-gray-600 dark:text-gray-300 mt-2">Pantau dan kelola semua reservasi yang masuk</p>
        <div class="w-24 h-1.5 bg-amber-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Total Reservasi</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white" id="total-reservations">0</h3>
                </div>
                <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 border-l-4 border-amber-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Menunggu</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white" id="pending-reservations">0</h3>
                </div>
                <div class="bg-amber-100 dark:bg-amber-900 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Diterima</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white" id="accepted-reservations">0</h3>
                </div>
                <div class="bg-green-100 dark:bg-green-900 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 border-l-4 border-red-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Ditolak</p>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white" id="rejected-reservations">0</h3>
                </div>
                <div class="bg-red-100 dark:bg-red-900 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="mb-6 bg-white dark:bg-gray-800 rounded-xl shadow p-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="relative w-full md:w-64">
                <input type="text" id="search-input" placeholder="Cari reservasi..." class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                <div class="absolute left-3 top-2.5 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-3">
                <select id="status-filter" class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                    <option value="all">Semua Status</option>
                    <option value="menunggu">Menunggu</option>
                    <option value="diterima">Diterima</option>
                    <option value="ditolak">Ditolak</option>
                </select>
                
                <select id="date-filter" class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                    <option value="all">Semua Tanggal</option>
                    <option value="today">Hari Ini</option>
                    <option value="tomorrow">Besok</option>
                    <option value="week">Minggu Ini</option>
                    <option value="month">Bulan Ini</option>
                </select>
                
                <button id="export-btn" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg transition duration-200 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Export
                </button>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-2xl shadow-xl">
        <table class="min-w-full text-sm text-left text-gray-800 dark:text-gray-200">
            <thead class="bg-amber-50 dark:bg-amber-900/30 text-gray-700 dark:text-white">
                <tr>
                    <th class="px-6 py-4 font-medium">ID</th>
                    <th class="px-6 py-4 font-medium">Nama</th>
                    <th class="px-6 py-4 font-medium">Tanggal</th>
                    <th class="px-6 py-4 font-medium">Jam</th>
                    <th class="px-6 py-4 font-medium">Tamu</th>
                    <th class="px-6 py-4 font-medium">Kontak</th>
                    <th class="px-6 py-4 font-medium">Status</th>
                    <th class="px-6 py-4 font-medium text-right">Aksi</th>
                </tr>
            </thead>
            <tbody id="reservasi-table" class="divide-y divide-gray-200 dark:divide-gray-700">
                <!-- Data will be loaded here -->
            </tbody>
        </table>
        
        <!-- Pagination -->
        <div class="px-6 py-4 flex flex-col md:flex-row items-center justify-between border-t border-gray-200 dark:border-gray-700">
            <div class="text-sm text-gray-700 dark:text-gray-400 mb-4 md:mb-0">
                Menampilkan <span id="start-item" class="font-medium">1</span> sampai <span id="end-item" class="font-medium">10</span> dari <span id="total-items" class="font-medium">0</span> reservasi
            </div>
            <div class="flex gap-1">
                <button id="prev-page" class="px-3 py-1 rounded border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    Sebelumnya
                </button>
                <div id="page-numbers" class="flex gap-1">
                    <!-- Page numbers will be inserted here -->
                </div>
                <button id="next-page" class="px-3 py-1 rounded border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    Selanjutnya
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50 p-4">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto relative">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-white text-2xl transition duration-200">
            &times;
        </button>
        <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Detail Reservasi
        </h2>
        <div id="modal-content" class="space-y-4 text-gray-700 dark:text-gray-300">
            <!-- Content will be loaded here -->
        </div>
        <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700 flex justify-end gap-3">
            <button onclick="closeModal()" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-200">
                Tutup
            </button>
            <button id="confirm-reservation" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition duration-200 hidden">
                Konfirmasi
            </button>
            <button id="reject-reservation" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition duration-200 hidden">
                Tolak
            </button>
        </div>
    </div>
</div>

<!-- Notification Toast -->
<div id="toast" class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-16 transition-transform duration-300 flex items-center gap-3 z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    <span id="toast-message">Reservasi berhasil diperbarui!</span>
</div>

<script>
    // Enhanced data with more realistic entries
    const dataReservasi = [
        {
            id: 1,
            nama: 'Ahmad Faiz',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 1)).toISOString().split('T')[0],
            jam: '19:00',
            tamu: 4,
            kontak: '0821-1234-5678',
            email: 'ahmadfaiz@mail.com',
            catatan: 'Minta tempat outdoor dengan view yang bagus. Ada 1 anak kecil.',
            status: 'menunggu',
            created_at: new Date().toISOString()
        },
        {
            id: 2,
            nama: 'Siti Aminah',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 2)).toISOString().split('T')[0],
            jam: '18:30',
            tamu: 2,
            kontak: '0812-8765-4321',
            email: 'siti.aminah@gmail.com',
            catatan: 'Vegetarian only. Tidak makan daging, ikan, telur, atau produk hewani lainnya.',
            status: 'menunggu',
            created_at: new Date().toISOString()
        },
        {
            id: 3,
            nama: 'Rizky Andika',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 3)).toISOString().split('T')[0],
            jam: '20:00',
            tamu: 5,
            kontak: '0852-3344-7788',
            email: 'rizkyandika@yahoo.com',
            catatan: 'Merayakan ulang tahun. Mohon disiapkan kue kecil dengan lilin.',
            status: 'menunggu',
            created_at: new Date().toISOString()
        },
        {
            id: 4,
            nama: 'Dewi Sartika',
            tanggal: new Date().toISOString().split('T')[0],
            jam: '12:30',
            tamu: 3,
            kontak: '0813-5566-7788',
            email: 'dewi.sartika@outlook.com',
            catatan: 'Meeting bisnis. Butuh meja yang tenang dengan stop kontak untuk laptop.',
            status: 'diterima',
            created_at: new Date(new Date().setDate(new Date().getDate() - 1)).toISOString()
        },
        {
            id: 5,
            nama: 'Budi Santoso',
            tanggal: new Date(new Date().setDate(new Date().getDate() - 1)).toISOString().split('T')[0],
            jam: '13:00',
            tamu: 6,
            kontak: '0878-9900-1122',
            email: 'budi.santoso@company.com',
            catatan: 'Reservasi untuk tim kantor. Mohon meja besar.',
            status: 'ditolak',
            created_at: new Date(new Date().setDate(new Date().getDate() - 2)).toISOString()
        },
        {
            id: 6,
            nama: 'Anita Rahayu',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 5)).toISOString().split('T')[0],
            jam: '19:30',
            tamu: 2,
            kontak: '0823-4455-6677',
            email: 'anita.rahayu@mail.com',
            catatan: 'Malam anniversary. Mohon meja romantis dengan lilin.',
            status: 'menunggu',
            created_at: new Date().toISOString()
        },
        {
            id: 7,
            nama: 'Fajar Nugroho',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 7)).toISOString().split('T')[0],
            jam: '20:30',
            tamu: 8,
            kontak: '0811-2233-4455',
            email: 'fajar.nugroho@business.com',
            catatan: 'Acara keluarga besar. Butuh meja besar atau bisa digabung.',
            status: 'diterima',
            created_at: new Date(new Date().setDate(new Date().getDate() - 1)).toISOString()
        },
        {
            id: 8,
            nama: 'Maya Indah',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 1)).toISOString().split('T')[0],
            jam: '18:00',
            tamu: 4,
            kontak: '0856-7788-9900',
            email: 'maya.indah@creative.com',
            catatan: 'Ada anggota yang alergi kacang. Mohon diperhatikan.',
            status: 'menunggu',
            created_at: new Date().toISOString()
        },
        {
            id: 9,
            nama: 'Hendra Kurniawan',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 2)).toISOString().split('T')[0],
            jam: '21:00',
            tamu: 2,
            kontak: '0812-3344-5566',
            email: 'hendra.k@tech.io',
            catatan: 'Makan malam setelah meeting. Mohon meja dekat pintu.',
            status: 'menunggu',
            created_at: new Date().toISOString()
        },
        {
            id: 10,
            nama: 'Linda Wati',
            tanggal: new Date(new Date().setDate(new Date().getDate() + 3)).toISOString().split('T')[0],
            jam: '19:15',
            tamu: 5,
            kontak: '0877-8899-0011',
            email: 'linda.wati@design.com',
            catatan: 'Acara ulang tahun anak. Mohon disiapkan kursi bayi.',
            status: 'diterima',
            created_at: new Date(new Date().setDate(new Date().getDate() - 2)).toISOString()
        },
    ];

    // Configuration
    const itemsPerPage = 5;
    let currentPage = 1;
    let filteredData = [...dataReservasi];

    // Status badge styles
    const statusBadge = {
        menunggu: 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/50 dark:text-yellow-200',
        diterima: 'bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-200',
        ditolak: 'bg-red-100 text-red-800 dark:bg-red-900/50 dark:text-red-200',
    };

  // Status action buttons (fix Laravel blade conflict & logic)
const statusActions = {
    menunggu: `
        <button onclick="updateStatus(__ID__, 'diterima')" class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white text-xs rounded-lg transition duration-200 flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Terima
        </button>
        <button onclick="updateStatus(__ID__, 'ditolak')" class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white text-xs rounded-lg transition duration-200 flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            Tolak
        </button>
    `,
    diterima: `
    <button onclick="updateStatus(__ID__, 'ditolak')" class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white text-xs rounded-lg transition duration-200 flex items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        Tolak
    </button>
    <button onclick="updateStatus(__ID__, 'menunggu')" class="px-3 py-1 bg-gray-400 hover:bg-gray-500 text-white text-xs rounded-lg transition duration-200 flex items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3" />
        </svg>
        Batal Konfirmasi
    </button>
`,
    ditolak: `
        <button onclick="updateStatus(__ID__, 'diterima')" class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white text-xs rounded-lg transition duration-200 flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Terima
        </button>
    `
};


    // Format date to local string
    function formatDate(dateString) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('id-ID', options);
    }

    // Format time to HH:mm
    function formatTime(timeString) {
        return timeString;
    }

    // Update statistics
    function updateStats() {
        const total = filteredData.length;
        const pending = filteredData.filter(item => item.status === 'menunggu').length;
        const accepted = filteredData.filter(item => item.status === 'diterima').length;
        const rejected = filteredData.filter(item => item.status === 'ditolak').length;
        
        document.getElementById('total-reservations').textContent = total;
        document.getElementById('pending-reservations').textContent = pending;
        document.getElementById('accepted-reservations').textContent = accepted;
        document.getElementById('rejected-reservations').textContent = rejected;
    }

    // Render table with pagination
    function renderTable() {
        const table = document.getElementById('reservasi-table');
        table.innerHTML = '';
        
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, filteredData.length);
        
        for (let i = startIndex; i < endIndex; i++) {
            const item = filteredData[i];
            const actions = statusActions[item.status].replace(/__ID__/g, item.id);
            
            table.innerHTML += `
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition duration-150">
                    <td class="px-6 py-4 font-mono text-xs text-gray-500 dark:text-gray-400">#${item.id.toString().padStart(3, '0')}</td>
                    <td class="px-6 py-4 font-medium">${item.nama}</td>
                    <td class="px-6 py-4">${item.tanggal}</td>
                    <td class="px-6 py-4">${item.jam}</td>
                    <td class="px-6 py-4">${item.tamu}</td>
                    <td class="px-6 py-4">${item.kontak}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs ${statusBadge[item.status]} capitalize">${item.status}</span>
                    </td>
                    <td class="px-6 py-4 flex justify-end gap-2">
                        ${actions}
                        <button onclick="showDetail(${item.id})" class="px-3 py-1 bg-gray-500 hover:bg-gray-600 text-white text-xs rounded-lg transition duration-200 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            Detail
                        </button>
                    </td>
                </tr>
            `;
        }
        
        // Update pagination info
        document.getElementById('start-item').textContent = startIndex + 1;
        document.getElementById('end-item').textContent = endIndex;
        document.getElementById('total-items').textContent = filteredData.length;
        
        // Update pagination buttons
        document.getElementById('prev-page').disabled = currentPage === 1;
        document.getElementById('next-page').disabled = endIndex >= filteredData.length;
        
        // Update page numbers
        const totalPages = Math.ceil(filteredData.length / itemsPerPage);
        const pageNumbers = document.getElementById('page-numbers');
        pageNumbers.innerHTML = '';
        
        for (let i = 1; i <= totalPages; i++) {
            pageNumbers.innerHTML += `
                <button onclick="goToPage(${i})" class="px-3 py-1 rounded ${currentPage === i ? 'bg-amber-500 text-white' : 'border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300'}">
                    ${i}
                </button>
            `;
        }
        
        // Update stats
        updateStats();
    }

    // Go to specific page
    function goToPage(page) {
        currentPage = page;
        renderTable();
    }

    // Filter data based on search and filters
    function filterData() {
        const searchTerm = document.getElementById('search-input').value.toLowerCase();
        const statusFilter = document.getElementById('status-filter').value;
        const dateFilter = document.getElementById('date-filter').value;
        
        const today = new Date().toISOString().split('T')[0];
        const tomorrow = new Date(new Date().setDate(new Date().getDate() + 1)).toISOString().split('T')[0];
        
        filteredData = dataReservasi.filter(item => {
            // Search filter
            const matchesSearch = 
                item.nama.toLowerCase().includes(searchTerm) || 
                item.email.toLowerCase().includes(searchTerm) || 
                item.kontak.includes(searchTerm) || 
                item.id.toString().includes(searchTerm);
            
            // Status filter
            const matchesStatus = statusFilter === 'all' || item.status === statusFilter;
            
            // Date filter
            let matchesDate = true;
            if (dateFilter !== 'all') {
                const itemDate = item.tanggal;
                
                if (dateFilter === 'today') {
                    matchesDate = itemDate === today;
                } else if (dateFilter === 'tomorrow') {
                    matchesDate = itemDate === tomorrow;
                } else if (dateFilter === 'week') {
                    const itemDateObj = new Date(itemDate);
                    const todayObj = new Date();
                    const nextWeek = new Date(todayObj.setDate(todayObj.getDate() + 7));
                    
                    matchesDate = itemDateObj >= new Date() && itemDateObj <= nextWeek;
                } else if (dateFilter === 'month') {
                    const itemDateObj = new Date(itemDate);
                    const todayObj = new Date();
                    const nextMonth = new Date(todayObj.setMonth(todayObj.getMonth() + 1));
                    
                    matchesDate = itemDateObj >= new Date() && itemDateObj <= nextMonth;
                }
            }
            
            return matchesSearch && matchesStatus && matchesDate;
        });
        
        currentPage = 1;
        renderTable();
    }

    // Update reservation status
    function updateStatus(id, statusBaru) {
        const idx = dataReservasi.findIndex(r => r.id === id);
        if (idx !== -1) {
            dataReservasi[idx].status = statusBaru;
            filterData();
            showToast(`Reservasi #${id.toString().padStart(3, '0')} berhasil diubah ke status "${statusBaru}"`);
        }
    }

    // Show reservation detail in modal
    function showDetail(id) {
        const item = dataReservasi.find(r => r.id === id);
        const content = document.getElementById('modal-content');
        
        content.innerHTML = `
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Informasi Pemesan</h3>
                    <div class="mt-2 space-y-2">
                        <p><strong class="font-medium">Nama:</strong> ${item.nama}</p>
                        <p><strong class="font-medium">Email:</strong> ${item.email}</p>
                        <p><strong class="font-medium">Kontak:</strong> ${item.kontak}</p>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Detail Reservasi</h3>
                    <div class="mt-2 space-y-2">
                        <p><strong class="font-medium">Tanggal:</strong> ${formatDate(item.tanggal)}</p>
                        <p><strong class="font-medium">Jam:</strong> ${formatTime(item.jam)}</p>
                        <p><strong class="font-medium">Jumlah Tamu:</strong> ${item.tamu} orang</p>
                        <p><strong class="font-medium">Status:</strong> <span class="px-2 py-0.5 rounded-full text-xs ${statusBadge[item.status]} capitalize">${item.status}</span></p>
                    </div>
                </div>
            </div>
            
            <div class="pt-4">
                <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Catatan Khusus</h3>
                <div class="mt-2 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    ${item.catatan || '<span class="text-gray-400 dark:text-gray-500">Tidak ada catatan</span>'}
                </div>
            </div>
            
            <div class="pt-4">
                <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Informasi Tambahan</h3>
                <div class="mt-2 space-y-1 text-sm">
                    <p><strong class="font-medium">ID Reservasi:</strong> #${item.id.toString().padStart(3, '0')}</p>
                    <p><strong class="font-medium">Dibuat pada:</strong> ${new Date(item.created_at).toLocaleString('id-ID')}</p>
                </div>
            </div>
        `;
        
        // Show appropriate action buttons in modal
        const confirmBtn = document.getElementById('confirm-reservation');
        const rejectBtn = document.getElementById('reject-reservation');
        
        confirmBtn.classList.add('hidden');
        rejectBtn.classList.add('hidden');
        
        if (item.status === 'menunggu') {
            confirmBtn.classList.remove('hidden');
            rejectBtn.classList.remove('hidden');
            
            confirmBtn.onclick = () => {
                updateStatus(item.id, 'diterima');
                closeModal();
            };
            
            rejectBtn.onclick = () => {
                updateStatus(item.id, 'ditolak');
                closeModal();
            };
        } else if (item.status === 'ditolak') {
            confirmBtn.classList.remove('hidden');
            confirmBtn.onclick = () => {
                updateStatus(item.id, 'diterima');
                closeModal();
            };
        } else if (item.status === 'diterima') {
        rejectBtn.classList.remove('hidden');
        rejectBtn.textContent = 'Batalkan Konfirmasi';
        rejectBtn.onclick = () => {
            updateStatus(item.id, 'menunggu'); // ✅ status balik ke "menunggu"
            closeModal();
        };
    }
            
        
        document.getElementById('modal').classList.remove('hidden');
        document.getElementById('modal').classList.add('flex');
    }

    // Close modal
    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
        document.getElementById('modal').classList.remove('flex');
    }

    // Show toast notification
    function showToast(message) {
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toast-message');
        
        toastMessage.textContent = message;
        toast.classList.remove('translate-y-16');
        toast.classList.add('translate-y-0');
        
        setTimeout(() => {
            toast.classList.remove('translate-y-0');
            toast.classList.add('translate-y-16');
        }, 3000);
    }

    // Export data to CSV
    function exportToCSV() {
        const headers = ['ID', 'Nama', 'Email', 'Kontak', 'Tanggal', 'Jam', 'Jumlah Tamu', 'Status', 'Catatan', 'Dibuat Pada'];
        const rows = filteredData.map(item => [
            item.id,
            `"${item.nama}"`,
            `"${item.email}"`,
            `"${item.kontak}"`,
            item.tanggal,
            item.jam,
            item.tamu,
            item.status,
            `"${item.catatan || ''}"`,
            new Date(item.created_at).toLocaleString('id-ID')
        ]);
        
        let csvContent = "data:text/csv;charset=utf-8," 
            + headers.join(",") + "\n" 
            + rows.map(e => e.join(",")).join("\n");
        
        const encodedUri = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", `reservasi_${new Date().toISOString().split('T')[0]}.csv`);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        
        showToast('Data berhasil diexport ke CSV');
    }

    // Initialize the page
    document.addEventListener('DOMContentLoaded', () => {
        renderTable();
        
        // Add event listeners for filters
        document.getElementById('search-input').addEventListener('input', filterData);
        document.getElementById('status-filter').addEventListener('change', filterData);
        document.getElementById('date-filter').addEventListener('change', filterData);
        document.getElementById('export-btn').addEventListener('click', exportToCSV);
        
        // Pagination buttons
        document.getElementById('prev-page').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable();
            }
        });
        
        document.getElementById('next-page').addEventListener('click', () => {
            if (currentPage * itemsPerPage < filteredData.length) {
                currentPage++;
                renderTable();
            }
        });
    });
</script>
@endsection