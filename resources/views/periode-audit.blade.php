@extends('layouts.app')

@section('breadcrumb')
    <span>Data User</span>
    <x-heroicon-o-chevron-right class="w-4 h-4" />
    <span class="text-sky-800">List</span>
@endsection

@section('content')
    <h1 class="text-3xl font-bold text-gray-950 mb-12">Periode Audit Mutu Internal</h1>

    <!-- Form Section -->
    <div class="space-y-8">
        <div class="space-y-4">
            <div>
                <label class="block text-base font-semibold mb-3">Nama Periode AMI</label>
                <input type="text" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-400 placeholder-gray-400 text-sm"
                    placeholder="Nama Periode AMI">
            </div>
            
            <div class="grid grid-cols-2 gap-6 mb-6">
                @include('periode-audit.partials.date-input', ['label' => 'Tanggal Mulai'])
                @include('periode-audit.partials.date-input', ['label' => 'Tanggal Berakhir'])
            </div>
            
            <button class="bg-sky-800 text-white px-4 py-3 rounded-xl flex items-center gap-2 hover:bg-sky-900 transition">
                <x-heroicon-o-plus class="w-6 h-6" />
                <span class="text-sm font-semibold">Tambah Periode</span>
            </button>
        </div>

        <!-- Table Section -->
        @include('periode-audit.partials.table')
    </div>
@endsection