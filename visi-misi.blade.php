@extends('layouts.app')

@section('content')
<center>
<h1 class="text-primary mb-4">Visi &amp; Misi</h1>
</center>
<!-- Gambar Visi dengan efek hover -->
<div class="text-center">
  <img src="{{ asset('gambar/misi.webp') }}" alt="Visi" class="misi-img img-fluid" onclick="openModal(this.src)">
</div>
<br>
<br>
<div class="text-center">
  <img src="{{ asset('gambar/visi.webp') }}" alt="Visi" class="visi-img img-fluid" onclick="openModal(this.src)">
</div>

<!-- Modal -->
<div id="imgModal" class="modal-img" onclick="closeModal()">
  <span class="modal-close">&times;</span>
  <img class="modal-content-img" id="modalImage">
</div>


<p class="mt-4 text-muted">
    Visi ini adalah cara pandang jauh ke depan ke mana instansi pemerintah akan dibawa agar dapat eksis, antisipatif dan inovatif. 
    Berikut adalah pernyataan visi dan misi Dinas Pendidikan Kabupaten Lahat.
</p>
@endsection

@push('styles')
<style>
.-img {
    width: 60%;
    max-width: 50Opx;
    height: auto;
    transition: transform 0.4s ease;
    cursor: zoom-in;
    
}
.misi-img {
    width: 50%;
    max-width: 50Opx;
    height: auto;
    transition: transform 0.4s ease;
    cursor: zoom-in;
}
.visi-img {
    width: 50%;
    max-width: 50Opx;
    height: auto;
    transition: transform 0.4s ease;
    cursor: zoom-in;
}
.visi-img:hover {
    transform: scale(1.05);
}

.modal-img {
    display: none; 
    position: fixed; 
    z-index: 9999; 
    padding-top: 50px; 
    left: 0; 
    top: 0; 
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgba(0,0,0,0.9); 
}

.modal-content-img {
    margin: auto;
    display: block;
    max-width: 90%;
    max-height: 80%;
    animation: zoom 0.5s;
}

@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

.modal-close {
    position: absolute;
    top: 30px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}
</style>
@endpush


@push('scripts')
<script>
function openModal(src) {
    document.getElementById("imgModal").style.display = "block";
    document.getElementById("modalImage").src = src;
}

function closeModal() {
    document.getElementById("imgModal").style.display = "none";
}
</script>
@endpush
