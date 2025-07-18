@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-gray-200">
            <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
            <p>Selamat datang di dashboard aplikasi!</p>
            <p>Anda dapat mengelola data siswa melalui menu yang tersedia.</p>
        </div>
        <div class="py-3 flex justify-center">
            <a href="/siswa" class="bg-blue-600 rounded-2xl p-2 text-white">Liat Daftar Siswa</a>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center p-5">
        <p>Maaf kak untuk authnya pakai plugin breeze</p>
        <p>Disoalnya tidak ada ketentuan jadi saya inisiatif pakai cara cepat</p>
    </div>
</div>
@endsection