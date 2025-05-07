@extends('layouts.app')

@section('title', 'About - MyApp')

@section ('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Hubungi Kami</h1>
    <form action="0" method="POST" entype="multipart/from-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="tel" class="from-control" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda" required>
        </div>

        <div class="mb-3">
            <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
            <div class="flex item-center mb-2">
                <input class="mr-2 leading-tight" type="radio" name="jenis_kelamin" id="pria" value="pria" checked>
                <label class="text-gray-700" for="pria">Pria</label>
            </div>
            <div class="flex items-center mb-2">
            <input class="mr-2 leading-tight" type="radio" name="jenis_kelamin" id="wanita" value="wanita">
                <label class="text-gray-700" for="wanita">Wanita</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <select class="form-select" id="subject" name="subject" required>
                <option value="">Pilih subjek pesan</option>
                <option value="pertanyaan">Pertanyaan</option>
                <option value="masukkan">Masukkan</option>
                <option value="kerjasama">Kerjasama</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>

        <div class="mb-3">
            <label for="attachment" class="form-label">Lampiran</label>
            <input type="file" class="form-control" id="attachment" name="attachment">
        </div>

        <div class="mb-3 form-check">
            <div class="flex items-center">
                <input type="checkbox" class="mr-2 leading-tight" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">Saya menyetujui syarat dan ketentuan</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Kirim pesan</button>
        <a href="{{ route('home')}}" class="btn btn-primary">Kembali</a>
    </form>
</div>
@endsection