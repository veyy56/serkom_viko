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

        <style>
        /* Atur ukuran gambar */
        .container{
            margin-top: 15px;
        }

        .text_center{
          margin-bottom: 5px;
        }
        .card-img-top {
            margin-top: 60px;
            height: 360px;
        }
        .video {
            height: 360px;
        }

       </style>

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
                <a class="nav-link " aria-current="page" href="{{route ('home')}}">Home</a>
              </li>      
              <li class="nav-item">
                <a class="nav-link" href="{{route ('create')}}">Pesan Kamar</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Type Kamar
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route ('standart')}}">Standar Class</a></li>
                  <li><a class="dropdown-item active" href="{{route ('deluxe')}}">Deluxe Class</a></li>
                  <li><a class="dropdown-item" href="{{route ('familly')}}">Familly Class</a></li>
                </ul>
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
    <h1 class="text-center mt-5 mb-5">Kamar Deluxe</h1>
    <div class="row">
      
        <div class="col-md-6">
        <img src="{{ asset('img/Deluxe.jpg') }}" class="card-img-top img-fluid" alt="Kamar Standar">
            <div class="card-body">
                <h5 class="card-title">Kamar Deluxe</h5>
                <p class="card-text">Kamar hotel deluxe kami menawarkan ruang yang luas, dekorasi yang elegan, dan fasilitas modern yang memenuhi segala kebutuhan Anda. Kamar hotel deluxe kami adalah tempat yang sempurna untuk melepas lelah dan menikmati momen berharga selama liburan atau perjalanan bisnis Anda.</p>
                <h6 class="card-title">Harga : 400.000/hari</h6>
                <a href="{{route ('create')}}" class="btn btn-success">Pesan Sekarang</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video">
            <video width="500" height="400" controls>
            <source src="{{ asset('video/Deluxe.mp4') }}" type="video/mp4">
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