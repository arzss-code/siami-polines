<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>SiAMI Polines - Periode Audit</title>
</head>
<body class="font-inter bg-neutral-50">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 h-18 bg-sky-800 shadow-md flex items-center px-8 z-50">
        <!-- Logo & Nama Aplikasi -->
        <div class="ml-4 flex items-center gap-4">
            <img src="/logo.png" alt="Logo" class="w-12 h-12">
            <span class="text-4xl font-semibold text-white">SiAMI</span>
        </div>
        
        <!-- Spacer -->
        <div class="flex-1"></div>
        
        <!-- User Menu -->
        <div class="flex items-center gap-4">
            <button class="p-2 rounded-full hover:bg-sky-200">
                <x-heroicon-o-bell class="w-6 h-6 text-gray-100" />
            </button>
            <div class="flex items-center gap-3">
                <x-heroicon-o-user-circle class="w-10 h-10 text-white" />
                <span class="text-gray-200 font-medium">Nama Dosen, S.Kom,. M.Kom</span>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="fixed left-0 top-16 bottom-0 w-70 bg-white border-r border-gray-200 z-40">
        <nav class="p-4 overflow-y-auto">
            <div class="space-y-1">
                <x-sidebar-link icon="home" text="Dashboard" />
                <x-sidebar-link icon="calendar-days" text="Periode Audit" active />
                <x-sidebar-parent-link icon="building-office" text="Data Unit" :active="request()->routeIs('unit.*')" hasChildren>
                    <x-sidebar-child-link href="{{ route('unit.upt') }}" :active="request()->routeIs('unit.upt')" text="Daftar UPT" />
                    <x-sidebar-child-link href="{{ route('unit.prodi') }}" :active="request()->routeIs('unit.prodi')" text="Daftar Prodi" />
                    <x-sidebar-child-link href="{{ route('unit.jurusan') }}" :active="request()->routeIs('unit.jurusan')" text="Daftar Jurusan" />
                </x-sidebar-parent-link>
                <x-sidebar-link icon="clipboard-document-list" text="Data Instrumen" />
                <x-sidebar-link icon="user-group" text="Data User" />
                <x-sidebar-link icon="document-chart-bar" text="Laporan" />
                <x-sidebar-link icon="arrow-left-on-rectangle" text="Logout" />
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-70 mt-16 p-8">
        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-4">
            <span>Data Master</span>
            <x-heroicon-o-chevron-right class="w-4 h-4" />
            <span class="text-sky-800">Periode Audit</span>
        </div>

        <!-- Heading -->
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Periode Audit Mutu Internal</h1>

        <!-- Konten Form dan Tabel (Tetap sama seperti sebelumnya) -->
        <div class="space-y-8">
             <!-- Form Section -->
             <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                    <div class="space-y-6">
                        <!-- Nama Periode Input -->
                        <div>
                            <label class="block text-base font-semibold mb-3 text-gray-700">Nama Periode AMI</label>
                            <input type="text" 
                                class="w-full px-4 py-3 outline-none border-1 border-gray-300 rounded-xl focus:border-sky-500 focus:ring focus:ring-sky-500 placeholder-gray-400 text-sm"
                                placeholder="Masukkan nama periode AMI">
                        </div>

                        <!-- Date Inputs -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Tanggal Mulai -->
                            <div>
                                <label class="block text-base font-semibold mb-3 text-gray-700">Tanggal Mulai</label>
                                <input type="date" 
                                    class="w-full px-4 py-3 outline-none border-1 border-gray-300 rounded-xl focus:border-sky-500 focus:ring focus:ring-sky-500 text-gray-400 text-sm">
                            </div>

                            <!-- Tanggal Berakhir -->
                            <div>
                                <label class="block text-base font-semibold mb-3 text-gray-700">Tanggal Berakhir</label>
                                <input type="date" 
                                    class="w-full px-4 py-3 outline-none border-1 border-gray-300 rounded-xl focus:border-sky-500 focus:ring focus:ring-sky-500 text-gray-400 text-sm">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button class="bg-sky-800 text-white px-6 py-3 rounded-xl flex items-center gap-2 hover:bg-sky-900 transition w-fit">
                            <x-heroicon-o-plus class="w-5 h-5" />
                            <span class="text-sm font-semibold">Tambah Periode</span>
                        </button>
                    </div>
                </div>

            <!-- Table Section -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                    <!-- Table Controls -->
                    <div class="px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <!-- Entries Selector -->
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <span>Show</span>
                            <select class="px-3 py-2 outline-none border-1 border-gray-300 rounded-xl text-sm focus:border-sky-500 focus:ring focus:ring-sky-500">
                                <option>5</option>
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                            </select>
                            <span>entries</span>
                        </div>

                        <!-- Search Input -->
                        <div class="relative w-full sm:w-64">
                            <input type="search" 
                                placeholder="Search..." 
                                class="w-full pl-10 pr-4 py-2 outline-none border-1 border-gray-300 rounded-xl text-sm focus:border-sky-500focus:ring focus:ring-sky-500">
                            <x-heroicon-o-magnifying-glass class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" />
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b border-t border-gray-200">
                                <tr>
                                <th class="px-6 py-4 text-left rounded-lg">
                                    <input id="checkbox-default" type="checkbox" value="" class="w-5 h-5 appearance-none border cursor-pointer border-gray-300  rounded-md hover:border-sky-500 hover:bg-sky-100 checked:bg-no-repeat checked:bg-center checked:border-sky-500 checked:bg-sky-100">
                                </th>

                                    </th>
                                    <th class="px-3 py-4 text-center text-sm font-semibold text-gray-700">No</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Nama Periode AMI</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Tanggal Mulai</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Tanggal Berakhir</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Status</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <!-- Row 1 -->
                                <tr>
                                    <td class="px-6 py-4">
                                    <input id="checkbox-default" type="checkbox" value="" class="w-5 h-5 appearance-none border cursor-pointer border-gray-300  rounded-md hover:border-sky-500 hover:bg-sky-100 checked:bg-no-repeat checked:bg-center checked:border-sky-500 checked:bg-sky-100">
                                    </td>
                                    <td class="px-3 py-4 text-sm text-center text-gray-700">1</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Audit Mutu Internal 2024</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">1 Januari 2024</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">1 Mei 2024</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm">Berakhir</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2 flex-wrap">
                                            <button class="px-3 py-2 bg-yellow-400 text-white rounded-lg flex items-center gap-1 hover:bg-yellow-500">
                                                <x-heroicon-o-no-symbol class="w-4 h-4" />
                                                <span class="text-sm">Tutup</span>
                                            </button>
                                            <button class="px-3 py-2 bg-sky-800 text-white rounded-lg flex items-center gap-1 hover:bg-sky-900">
                                                <x-heroicon-o-pencil class="w-4 h-4" />
                                                <span class="text-sm">Edit</span>
                                            </button>
                                            <button class="px-3 py-2 bg-red-500 text-white rounded-lg flex items-center gap-1 hover:bg-red-600">
                                                <x-heroicon-o-trash class="w-4 h-4" />
                                                <span class="text-sm">Delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr>
                                    <td class="px-6 py-4">
                                    <input id="checkbox-default" type="checkbox" value="" class="w-5 h-5 appearance-none border cursor-pointer border-gray-300  rounded-md hover:border-sky-500 hover:bg-sky-100 checked:bg-no-repeat checked:bg-center checked:border-sky-500 checked:bg-sky-100">
                                    </td>
                                    <td class="px-3 py-4 text-sm text-center text-gray-700">2</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Audit Mutu Internal 2025</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">5 Januari 2025</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">8 Mei 2025</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full bg-sky-100 text-sky-800 text-sm">Sedang Berjalan</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2 flex-wrap">
                                            <!-- Repeating same action buttons -->
                                            <button class="px-3 py-2 bg-yellow-400 text-white rounded-lg flex items-center gap-1 hover:bg-yellow-500">
                                                <x-heroicon-o-no-symbol class="w-4 h-4" />
                                                <span class="text-sm">Tutup</span>
                                            </button>
                                            <button class="px-3 py-2 bg-sky-800 text-white rounded-lg flex items-center gap-1 hover:bg-sky-900">
                                                <x-heroicon-o-pencil class="w-4 h-4" />
                                                <span class="text-sm">Edit</span>
                                            </button>
                                            <button class="px-3 py-2 bg-red-500 text-white rounded-lg flex items-center gap-1 hover:bg-red-600">
                                                <x-heroicon-o-trash class="w-4 h-4" />
                                                <span class="text-sm">Delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        </div>
    </main>
</body>
</html>