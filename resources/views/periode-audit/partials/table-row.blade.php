<tr class="border-y border-gray-300">
    <td class="px-6 py-4 text-sm"><input type="checkbox" class="rounded border-gray-300"></td>
    <td class="px-4 py-4 text-sm text-center">{{ $loop->iteration }}</td>
    <td class="px-6 py-4 text-sm">{{ $period->name }}</td>
    <td class="px-6 py-4 text-sm">{{ $period->start_date->format('d F Y') }}</td>
    <td class="px-6 py-4 text-sm">{{ $period->end_date->format('d F Y') }}</td>
    <td class="px-6 py-4 text-sm">
        <span class="px-3 py-1 rounded-full {{ $period->status_class }}">{{ $period->status_label }}</span>
    </td>
    <td class="px-6 py-4">
        <div class="flex gap-2">
            <button class="p-2 bg-yellow-400 text-white rounded-lg flex gap-1 hover:bg-yellow-500">
                <x-heroicon-o-lock-closed class="w-5 h-5" />
                <span class="text-sm">Tutup</span>
            </button>
            <button class="p-2 bg-sky-800 text-white rounded-lg flex gap-1 hover:bg-sky-900">
                <x-heroicon-o-pencil class="w-5 h-5" />
                <span class="text-sm">Edit</span>
            </button>
            <button class="p-2 bg-red-500 text-white rounded-lg flex gap-1 hover:bg-red-600">
                <x-heroicon-o-trash class="w-5 h-5" />
                <span class="text-sm">Delete</span>
            </button>
        </div>
    </td>
</tr>