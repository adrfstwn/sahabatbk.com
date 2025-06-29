@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Verifikasi Email Anda</h1>
        <p class="mb-4">Sebelum melanjutkan, silakan cek email Anda untuk link verifikasi.</p>
        @if (session('message'))
            <div class="mb-4 text-green-600">{{ session('message') }}</div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded">Kirim Ulang Email Verifikasi</button>
        </form>
    </div>
</div>
@endsection