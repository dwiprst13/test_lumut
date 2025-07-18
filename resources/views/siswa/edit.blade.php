@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg mt-10">
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">edit siswa</h2>
        <a href="{{ route('siswa.index')}}" class="p-2 rounded-2xl bg-yellow-600 text-white">Kembali</a>
    </div>
    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nis" class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
            <input type="text" name="nis" maxlength="4" required value="{{ $siswa->nis }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
            <input type="text" name="nama" maxlength="30" value="{{ $siswa->nama }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="kelas" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
            <input type="text" name="kelas" maxlength="3" value="{{ $siswa->kelas }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="jurusan" class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
            <input type="text" name="jurusan" maxlength="3" value="{{ $siswa->jurusan }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm">
        </div>

        <button type="submit"
            class="w-full bg-green-600 text-white py-2 px-4 rounded-lg transition duration-200 shadow">
            Update
        </button>
    </form>
</div>
@endsection
