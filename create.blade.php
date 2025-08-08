@extends('layouts.berita')

@section('content')
<div class="container">
    <h2>Tambah Berita Baru</h2>
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Isi Berita</label>
            <textarea name="isi" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar (Opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
