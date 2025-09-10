@extends('layout.app')

@section('content')
<div class="container mx-auto p-6">
  <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">About</h1>

  <div class="bg-white rounded-xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row items-center gap-8">
    <!-- Foto -->
    <div class="w-40 h-50 overflow-hidden shadow-md border-2 border-blue-500">
      <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="w-full h-full object-cover">
    </div>

    <!-- Biodata -->
    <div class="text-gray-700 space-y-2">
      <p class="text-lg"><span class="font-semibold">Aplikasi ini dibuat oleh:</span></p>
      <p class="text-lg"><span class="font-semibold">Nama:</span> Muhammad Irfan Nuril Anwar</p>
      <p class="text-lg"><span class="font-semibold">NIM:</span> 2331730074</p>
      <p class="text-lg"><span class="font-semibold">Tanggal:</span> 08 September 2025</p>
    </div>
  </div>
</div>
@endsection
