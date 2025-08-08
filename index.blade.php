@extends('layouts.berita')

@section('content')
<div class="container">
    <h2>Daftar Berita</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('berita.create') }}" class="btn btn-success mb-3">+ Tambah Berita</a>
    @foreach($beritas as $berita)
    
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $berita->judul }}</h4>
                @if ($berita->gambar)
                    <img src="{{ asset('storage/gambar' . $berita->gambar) }}" class="img-fluid mb-2" style="max-width: 300px;">
                @endif
                <p>{{ $berita->isi }}</p>
                    <tr>
        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
            </div>
        </div>
     

    @endforeach
</div>
@endsection
