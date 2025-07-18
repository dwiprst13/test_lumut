@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Data Siswa</h2>
        <a href="{{ route('siswa.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
            tambah Siswa
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow overflow-hidden">
            <thead class="bg-gray-100 border-b-2 border-gray-200">
                <tr>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700">NIS</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700">Nama</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700">Kelas</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700">Jurusan</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($siswa as $s)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $s->nis }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $s->nama }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $s->kelas }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $s->jurusan }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 space-x-2">
                        <a href="{{ route('siswa.edit', $s->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
