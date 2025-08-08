@extends('layouts.app')

@section('content')



<style>
      
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
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel-item img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
  }

  .carousel-caption {
    position: absolute;
    top: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
  }

  .carousel-caption h1 {
    font-size: 3rem;
    font-weight: bold;
  }

  @media (max-width: 768px) {
    .carousel-item img {
      height: 60vh;
    }

    .carousel-caption h1 {
      font-size: 1.5rem;
    }

    .carousel-caption p {
      font-size: 1rem;
    }
  }



/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  /* rtl:remove */
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
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
  .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            width: 100%;
            margin: 20px auto;
            padding: 0 15px;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            aspect-ratio: 4/3;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-container:hover {
            transform: scale(1.03);
        }

        .image-container.zoomed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: zoom-out;
            border-radius: 0;
        }

        .image-container.zoomed img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }
    </style>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>

         </div>
    <div class="container-fluid px-10 ">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('gambar/ab.jpeg') }}" class="d-block w-100" alt="Slide 1">
      
      </div>
      <div class="carousel-item">
        <img src="{{ asset('gambar/ab.jpeg') }}" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('gambar/ab.jpeg') }}" class="d-block w-100" alt="Slide 1">
      </div>
        <div class="carousel-item">
        <img src="{{ asset('gambar/ab.jpeg') }}" class="d-block w-100" alt="Slide 1">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
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
</main>

<!-- Hero Section -->
<div class="bg-light p-5 rounded text-center shadow-sm">
    <h1 class="display-5 fw-bold text-primary">Selamat Datang di Website</h1>
    <h2 class="fw-semibold text-dark">Dinas Pendidikan Kota Lahat</h2>
    <p class="lead mt-3">
        Bersama membangun pendidikan yang berkualitas, inklusif, dan berdaya saing global.
    </p>
</div>

<!-- Tentang Dinas -->

    
 
 <center>
       
    <div class="gallery">
        <div class="image-container">
            <h4>Layanan Informasi Dan Pengaduan</h4>
            <img src="{{ asset('gambar/tes.jpg') }}" alt="foto" width="100" height="100">
        </div>
        <div class="image-container">
          <h4>Layanan Informasi Dan Pengaduan</h4>
            <img src="{{ asset('gambar/tes2.jpg') }}" alt="" />
        </div>
         <div class="image-container">
            <H4>Kritik Dan Saran</H4>
            <img src="{{ asset('gambar/tes3.jpg') }}" alt="" />
        </div>
         <div class="image-container">
            <H4>Layanan Informasi Dan Pengaduan</H4>
            <img src="{{ asset('gambar/tes.jpg') }}" alt="" />
        </div>
         <div class="image-container">
            <H4>Alur Pengaduan</H4>
            <img src="{{ asset('gambar/tes.jpg') }}" alt="" />
        </div>
         <div class="image-container">
            <H4>Maklumat Layanan</H4>
            <img src="{{ asset('gambar/m.webp') }}." alt="" />
        </div>
        </div>


    </center>
<!-- Menu Utama -->
<!-- <div class="row text-center mt-5">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title">Profil</h5>
                <p class="card-text">Lihat visi misi, struktur organisasi, dan pegawai Dinas Pendidikan.</p>
                <a href="{{ route('visi-misi') }}" class="btn btn-outline-primary">Lihat Profil</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title">Layanan</h5>
                <p class="card-text">Informasi layanan pendidikan dari jenjang SD, SMP, hingga SMA/SMK.</p>
                <a href="{{ route('layanan.sd') }}" class="btn btn-outline-primary">Lihat Layanan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title">Kontak</h5>
                <p class="card-text">Hubungi kami untuk informasi lebih lanjut seputar pendidikan di Kota Lahat.</p>
                <a href="{{ route('kontak') }}" class="btn btn-outline-primary">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div> -->
<script> 
document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.image-container');
            const closeBtn = document.getElementById('closeBtn');
            images.forEach(image => {
                image.addEventListener('click', function() {
                    // Toggle zoom state
                    if (this.classList.contains('zoomed')) {
                        this.classList.remove('zoomed');
                    } else {
                        // Remove zoom from all other images first
                        images.forEach(img => img.classList.remove('zoomed'));
                        this.classList.add('zoomed');
                    }
                });
            });
            closeBtn.addEventListener('click', function() {
                document.querySelectorAll('.image-container.zoomed').forEach(img => {
                    img.classList.remove('zoomed');
                });
            });
        });
        </script>

@endsection
