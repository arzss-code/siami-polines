<div class="bg-white rounded-2xl border border-gray-300 overflow-hidden">
    <!-- Table Controls -->
    <div class="px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2 text-neutral-500">
            <span class="text-sm">Show</span>
            <select class="px-2 py-2 border rounded-xl text-sm">
                <option>5</option>
                <option>10</option>
                <option>25</option>
                <option>50</option>
            </select>
            <span class="text-sm">entries</span>
        </div>
        <div class="relative">
            <input type="search" 
                placeholder="Search" 
                class="pl-11 pr-4 py-2 border border-gray-300 rounded-xl w-65 text-sm">
            <x-heroicon-o-magnifying-glass class="w-5 h-5 absolute left-3.5 top-2 text-neutral-400" />
        </div>
    </div>

    <!-- Table Content -->
    <table class="w-full">
        <thead class="bg-neutral-50 border-y border-gray-300">
            <tr>
                <th class="px-6 py-4 text-left font-semibold"><input type="checkbox" class="rounded border-gray-300"></th>
                <th class="px-4 py-4 text-left text-sm font-semibold">No</th>
                <th class="px-6 py-4 text-left text-sm font-semibold">Nama Periode AMI</th>
                <th class="px-6 py-4 text-left text-sm font-semibold">Tanggal Mulai</th>
                <th class="px-6 py-4 text-left text-sm font-semibold">Tanggal Berakhir</th>
                <th class="px-6 py-4 text-left text-sm font-semibold">Status</th>
                <th class="px-6 py-4 text-left text-sm font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($periods as $period)
                @include('periode-audit.partials.table-row', ['period' => $period])
            @endforeach
        </tbody>
    </table>

    <!-- Table Footer -->
    <div class="px-6 py-4 text-neutral-500 text-sm">
        Showing {{ $periods->firstItem() }} to {{ $periods->lastItem() }} of {{ $periods->total() }} results
    </div>
</div>