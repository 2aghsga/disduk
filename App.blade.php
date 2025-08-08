<!DOCTYPE html>
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Dinas Pendidikan
  </title>
  @stack('styles')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="style.css" rel="stylesheet"/>
  <link href="https://getbootstrap.com/docs/5.0/examples/carousel/" rel="canonical"/>
  <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
 </head>
 <style>
  .top-header {
            background-color: var(--primary);
            color: white;
            padding: 10px 0;
            font-size: 16px;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}
footer {
            margin-top: 50px;
            color: #666;
            text-align: center;
            padding: 20px;
        }
  @media (max-width: 768px) {
            .gallery {
                grid-template-columns: 1fr;
                gap: 20px;
                
            }

            .breadcrumb {
                font-size: 12px;
            }

            footer iframe {
                width: 100%;
                height: 150px;
            }
        }
          /* Footer */
        .footer {
            background-color: #0e0d0dff;
            color: #ddd;
            padding: 50px 0 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            color: white;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 20px;
            background-color: var(--accent);
            bottom: 0;
            left: 0;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.35s;
        }

        .footer-links a:hover {
            color: white;
        }

        .contact-info-footer {
            list-style: none;
        }

        .contact-info-footer li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .contact-info-footer i {
            color: var(--accent);
            margin-right: 10px;
            margin-top: 5px;
        }

        .copyright {
            background-color: #222;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
        }
        .sosial {
            margin-top: 20px;
            text-align: center;
            color: #000;

        }
 </style>
 <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
   <div class="container-fluid">
    <img alt="Logo" class="me-2" height="50" src="{{ asset('gambar/aa.png') }}" width="70"/>
    <a class="navbar-brand">
     DINAS PENDIDIKAN
    </a>
    <button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item">
       <a aria-current="page" class="nav-link " href="/">
        <i class="fas fa-home me-2" style="color:#007bff">
        </i>
        Home
       </a>
      </li>
      
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  href="#" role="button">
        <i class="fas fa-concierge-bell me-2" style="color:#28a745">
        </i>
        Layanan
       </a>
       <ul class="dropdown-menu">
        <li>
         <a class="dropdown-item" href="{{ route('layanan.sd') }}">
          <i class="fas fa-concierge-bell me-2" style="color:red">
          </i>
          Layanan SD
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="{{ route('layanan.smp') }}">
          <i class="fas fa-concierge-bell me-2" style="color:blue">
          </i>
          Layanan SMP
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="{{ route('layanan.sma') }}">
          <i class="fas fa-concierge-bell me-2" style="color:grey">
          </i>
          Layanan SMA/SMK
         </a>
        </li>
       </ul>
      </li>
      <!-- Dropdown Profil -->
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdownProfil" role="button">
        <i class="fas fa-user me-2"  style="color:#ffc107">
        </i>
        Profil
       </a>
       <ul aria-labelledby="navbarDropdownProfil" class="dropdown-menu">
        <li>
         <a class="dropdown-item" href="{{ route('visi-misi') }}">
          Visi &amp; Misi
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="{{ route('struktur') }}">
          Struktur
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="{{ route('tugas-fungsi') }}">
          Tugas dan Fungsi
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="{{ route('pegawai') }}">
       
          </i>
          Profil Pegawai
         </a>
        </li>
        
       </ul>
       <li class="nav-item">
       <a aria-current="page" class="nav-link " href="{{route('kontak')}}">
        <i class="fas fa-phone me-2"  style="color:green">
        </i>
        Kontak
       </a>
      </li>
       <li class="nav-item">
       <a aria-current="page" class="nav-link " href="{{route('berita.index')}}">
        <i class="fas fa-newspaper me-2" style="color:blue">
        </i>
        Berita
       </a>
      </li>
      </li>
     </ul>
    
     <div class="top-header">
      <div class="container">
       <div class="contact-info">
        <span>
         <i class="fas fa-phone" style="color:green">
         </i>
         (0731)322132
        </span>
        <span>
         <i class="fas fa-envelope" style="color:red">
         </i>
         sekretdikbud@gmail.com
        </span>
       </div>
      
      </div>
     </div>
    </div>
   </div>
  </nav>
 </header>
 <!-- <main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
<img src="{{ asset('images/misi.webp') }}" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="Slide 1">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</main> -->
 <body>
  <div class="container py-5">
   @yield('content')
  </div>
  <footer class="footer">
   <div class="container">
    <div class="footer-grid">
     <div class="footer-col">
      <h3>
       Tentang Kami
      </h3>
      <h5>
       <ul>
        Dinas Pendidikan Kabupaten Lahat bertugas menyelenggarakan urusan pemerintahan di bidang pendidikan untuk mewujudkan pelayanan pendidikan yang berkualitas, merata, dan terjangkau bagi seluruh masyarakat Kabupaten Lahat.
       </ul>
      </h5>
     </div>
     <div class="footer-col">
      <h3>
       Link Terkait
      </h3>
      <ul class="footer-links">
       <h5>
        <li>
         <a href="https://g.co/kgs/mz23mMX">
          Pemerintah Kabupaten Lahat
         </a>
        </li>
        <li>
         <a href="https://www.disdiklahat.com/">
          Kementerian Pendidikan
         </a>
        </li>
        <li>
         <a href="https://www.instagram.com/p/CP1_OdxjNx1/?utm_source=ig_web_copy_link">
          LPMP Lahat
         </a>
        </li>
        <li>
         <a href="https://bkpsdm.lahatkab.go.id/category/pengumuman/">
          Badan Kepegawaian Daerah
         </a>
        </li>
        <li>
         <a href="https://dinkes.lahatkab.go.id/">
          Dinas Kesehatan
         </a>
        </li>
       </h5>
      </ul>
     </div>
     <div class="footer-col">
      <h3>
       Layanan
      </h3>
      <ul class="footer-links">
       <h5>
        <li>
         <a href="https://lahat.spmb.id/">
          PPDB Online
         </a>
        </li>
        <li>
         <a href="https://dapo.kemendikdasmen.go.id/sp/2/110500">
          Data Sekolah
         </a>
        </li>
        <li>
         <a href="https://dinsos.lahatkab.go.id/detail/dinas-sosial-kabupaten-lahat-resmi-luncurkan-program-beladas">
          Informasi Beasiswa
         </a>
        </li>
        <li>
         <a href="https://dinsos.lahatkab.go.id/">
          Pengaduan Masyarakat
         </a>
        </li>
        <li>
         <a href="https://djpb.kemenkeu.go.id/kppn/lahat/id/kontak-kppn-lahat/column-2/formulir-permintaan.html">
          Download Formulir
         </a>
        </li>
       </h5>
      </ul>
     </div>
     <div class="footer-col">
      <h3>
       Kontak
      </h3>
      <ul class="contact-info-footer">
       <h5>
        <li>
         <i class="fas fa-map-marker-alt"style="color:red">
         </i>
         <div class="map-container">
          <iframe allowfullscreen="" height="100" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.140587676951!2d103.54743907438117!3d-3.779574843433375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e39fd5dd1f496b7%3A0xb2424b1f332bfb4f!2sDINAS%20PENDIDIKAN%20DAN%20KEBUDAYAAN%20KABUPATEN%20LAHAT!5e0!3m2!1sid!2sid!4v1753927595766!5m2!1sid!2sid" style="border:0;" width="60">
          </iframe>
         </div>
         <span>
          Jln. Kol H. Barlian Bandar Jaya, Kec. Lahat, Kab. Lahat SUM-SEL.
         </span>
        </li>
        <li>
         <i class="fas fa-phone"style="color:green">
         </i>
         <span>
          (0731)322132
         </span>
        </li>
        <li>
         <i class="fas fa-envelope"style="color:red">
         </i>
         <span>
          sekretdikbud@gmail.com
         </span>
        </li>
        <li>
         <i class="fas fa-clock" style="color:orange">
         </i>
         <span>
          Senin - Jumat: 08:00 - 16:00 WIB
         </span>
        </li>
       </h5>
      </ul>
     </div>
    </div>
   </div>
    <div class="sosial  -">
    <a href="https://www.tiktok.com" style="margin: 0 10px; font-size: 24px; color: white;" target="_blank">
     <i class="fab fa-tiktok" style="color:white">
     </i>
    </a>
    <a href="https://www.youtube.com" style="margin: 0 10px; font-size: 24px; color: white;" target="_blank">
     <i class="fab fa-youtube" style="color:red">
     </i>
    </a>
    <a href="https://www.instagram.com" style="margin: 0 10px; font-size: 24px; color: white;" target="_blank">
     <i class="fab fa-instagram"style="color:#e1306c">
     </i>
    </a>
    <a href="https://www.facebook.com" style="margin: 0 10px; font-size: 24px; color: white;" target="_blank">
     <i class="fab fa-facebook"style="color:#1877f2">
     </i>
    </a>
   </div>
   <footer class="bg-dark text-white text-center py-3">
    © {{ date('Y') }} Dinas Pendidikan Kota Lahat
   </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
   </script>
   @stack('scripts')
  
  </footer>
 </body>
</html>
