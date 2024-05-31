<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Hotelku.com</title>
</head>
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
            <li><a class="dropdown-item " href="{{route ('standart')}}">Standar Class</a></li>
            <li><a class="dropdown-item" href="{{route ('deluxe')}}">Deluxe Class</a></li>
            <li><a class="dropdown-item active" href="{{route ('familly')}}">Familly Class</a></li>
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
        <style>
        /* Atur ukuran gambar */
        .container{
            margin-top: 15px;
        }
        .card-img-top {
            height: 400px;
            width: 400px;
        }
        .video {
          display: block;
          position: relative;
          top: 0px; /* Adjust this value according to your needs */
          border: 1px solid #ccc; /* Border style */
          border-radius: 5px; /* Rounded corners */
          box-shadow: 0 0 5px rgba(0,0,0,0.1); /* Shadow effect */
        }
       </style>
    <div class="container">
    <h1 class="text-center mt-5 mb-5">Kamar Familly</h1>
    <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('img/familly.jpg') }}" class="card-img-top img-fluid" alt="Kamar Standar">
            <div class="card-body">
                <h5 class="card-title">Kamar Familly</h5>
                <p class="card-text">Kamar mewah dan luas yang cocok untuk liburan anda dengan keluarga tercinta.</p>
                <h6 class="card-title">Harga : 1.000.000/hari</h6>
                <a href="{{route ('create')}}" class="btn btn-success">Pesan Sekarang</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video">
            <video width="538" height="400" controls>
            <source src="{{ asset('video/Executive.mp4') }}" type="video/mp4">
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