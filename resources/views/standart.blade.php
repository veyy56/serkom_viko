<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Hotelku.com</title>
</head>
<style>
        /* Atur ukuran gambar */
        .container{
          position: relative; 
          margin-top: 5px;
        }

        .card-img-top {
            height: 360px;
            width: 400px;
            vertical-align: middle;
          }
        .video {
          display: block;
          position: relative;
          top: -80px; /* Adjust this value according to your needs */
        }

       </style>
<body>
       <!-- Navbar Web Hotel -->
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Hotelku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  " aria-current="page" href="{{route ('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('create')}}">Pesan Kamar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Type Kamar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item active" href="{{route ('standart')}}">Standar Class</a></li>
            <li><a class="dropdown-item" href="{{route ('deluxe')}}">Deluxe Class</a></li>
            <li><a class="dropdown-item" href="{{route ('familly')}}">Familly Class</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('reservations.index')}}">Reservasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('reservations.room-stats')}}">Statistik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('about')}}">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
       <!-- End Navbar -->
       
    <div class="container">
    <h1 class="text-center mt-5 mb-5">Kamar Standar</h1>

    <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('img/Standar.jpg') }}" class="card-img-top img-fluid" alt="Kamar Standar">
            <div class="card-body">
                <h5 class="card-title">Kamar Standar</h5>
                <p class="card-text">Nikmati kenyamanan yang sederhana namun memuaskan dengan memilih kamar hotel standar kami. Didesain untuk memenuhi kebutuhan tamu yang mencari penginapan yang terjangkau namun tetap berkualitas, kamar hotel standar kami menawarkan keseimbangan yang sempurna antara kenyamanan dan nilai.</p>
                <h6 class="card-title">Harga : 100.000/hari</h6>
                <a href="{{route ('create')}}" class="btn btn-success">Pesan Sekarang</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video">
            <video width="400" height="400" controls>
            <source src="{{ asset('video/Standart.mp4') }}" type="video/mp4">
            </video>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>