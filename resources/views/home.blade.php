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
  .card-img-top {
    height: 350px; /* Adjust the height as needed */
    margin-bottom: 50px;
  }
  .row {
    margin-bottom: 50px;
  }

  .footer {
    background-color: grey;
  }

  .btn {
    margin-top: -20px;
    margin-bottom: 10px;
  }


</style>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Hotelku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="{{route ('home')}}">Home</a>
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
            <li><a class="dropdown-item" href="{{route ('deluxe')}}">Deluxe Class</a></li>
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

        <div class="container">
        <h1 class="text-center mt-5 mb-5">Kamar Hotel Hotelku</h1>

  <div class="row">
  <div class="col-md-4">
    <div class="card mb-3">
      <img src="{{ asset('img/Standar.jpg') }}" class="card-img-top img-fluid" alt="Kamar Standar">
      <div class="card-body">
        <h5 class="card-title">Kamar Standar</h5>
        <p class="card-text">Nikmati kenyamanan yang sederhana namun memuaskan dengan memilih kamar hotel standar kami. Didesain untuk memenuhi kebutuhan tamu yang mencari penginapan yang terjangkau namun tetap berkualitas.</p>
        <p> - Harga Murah dan berkualitas</p>
        <p> - Ruang nyaman dekorasi menyenangkan</p>

        <h6 class="card-title">100.000/hari</h6> <br>
        <a href="{{route ('standart')}}" class="btn btn-success">Lihat Kamar</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb-3">
      <img src="{{ asset('img/Deluxe.jpg') }}" class="card-img-top img-fluid" alt="Kamar Deluxe">
      <div class="card-body">
        <h5 class="card-title">Kamar Deluxe</h5>
        <p class="card-text">Kamar hotel deluxe menawarkan ruang yang luas, dekorasi elegan, dan fasilitas modern yang memenuhi segala kebutuhan Anda.</p>
        <p> - Akses eksklusif ke fasilitas hotel termasuk kolam renang, dan pusat kebugaran.</p>
        <p> - Dengan perpaduan sempurna antara kenyamanan dan kemewahan.</p>
        <h6 class="card-title">400.000/hari</h6> <br>
        <a href="{{route ('deluxe')}}" class="btn btn-success">Lihat Kamar</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb-3">
      <img src="{{ asset('img/familly.jpg') }}" class="card-img-top img-fluid" alt="Kamar Suite">
      <div class="card-body">
        <h5 class="card-title">Kamar Familly</h5>
        <p class="card-text">Kamar mewah dan luas yang cocok untuk liburan anda dengan keluarga tercinta, dengan fasilitas setara dengan bintang 4.</p>
        <p> - Kamar hotel family kami menawarkan ruang yang luas untuk kenyamanan seluruh keluarga Anda.</p>
        <p> - Nikmati pemandangan yang menakjubkan dari kamar hotel family</p>
        <h6 class="card-title">1.000.000/hari</h6> <br>
        <a href="{{route ('familly')}}" class="btn btn-success">Lihat Kamar</a>
      </div>
    </div>
  </div>
</div>
      <div class="d-flex justify-content-center">
          <a href="{{route ('create')}}" class="btn btn-success">Pesan Sekarang</a>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>