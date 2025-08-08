@extends('layouts.app')

@section('content')
<style>
    .text {
    display: flex;
    gap: 20px; /* jarak antar kolom */
    align-items: flex-start;
  }
  .kolom {
    flex: 1; /* bagi lebar sama rata */
    padding: 10px;
    box-sizing: border-box;
  }
  h2 {
    color: #0073e6;
  }
  .container{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
  }
</style>

<div class="text">
  <!-- Kolom kiri -->
  <div class="kolom">
    <h2>Tentang Dinas Pendidikan</h2>
    <p>Dinas Pendidikan Kota Lahat merupakan lembaga pemerintah daerah yang bertugas menyelenggarakan urusan pemerintahan di bidang pendidikan dasar dan menengah.</p>
    <ul>
      <li>Meningkatkan akses dan mutu pendidikan</li>
      <li>Mengelola SD, SMP, SMA/SMK di wilayah kota</li>
      <li>Memberikan layanan pendidikan dan pelatihan</li>
    </ul>
  </div>

  <!-- Kolom kanan -->
  <div class="kolom">
    <h2>Tugas dan Fungsi</h2>
    <p>Dinas Pendidikan dan Kebudayaan Kabupaten Lahat mempunyai tugas melaksanakan urusan pemerintahan daerah berdasarkan asas otonomi dan tugas pembantuan di bidang pendidikan dan kebudayaan.</p>
    <ol>
      <li>Perumusan kebijakan teknis di bidang pendidikan dan kebudayaan.</li>
      <li>Penyelenggaraan urusan pemerintahan dan pelayanan umum di bidang pendidikan dan kebudayaan.</li>
      <li>Pembinaan dan pengawasan terhadap satuan pendidikan dan lembaga kebudayaan.</li>
      <li>Pelaksanaan evaluasi dan pelaporan pelaksanaan tugas di bidang pendidikan dan kebudayaan.</li>
      <li>Pelaksanaan fungsi lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya.</li>
    </ol>
  </div>
</div>

@endsection
