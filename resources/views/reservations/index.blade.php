<!-- resources/views/reservations/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
            <li><a class="dropdown-item" href="{{route ('standart')}}">Standar Class</a></li>
            <li><a class="dropdown-item" href="{{route ('deluxe')}}">Deluxe Class</a></li>
            <li><a class="dropdown-item" href="{{route ('familly')}}">Familly Class</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route ('reservations.index')}}">Reservasi</a>
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

<div class="container mt-3">
        <h1 class="text-center">Daftar Pemesan</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Identitas</th>
                    <th>Tipe Kamar</th>
                    <th>Harga Kamar (Rp)</th>
                    <th>Tanggal Pesan</th>
                    <th>Durasi Menginap</th>
                    <th>Breakfast</th>
                    <th>Total Bayar (Rp)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->gender == 'Laki-laki' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $reservation->nik }}</td>
                        <td>{{ ucfirst($reservation->room_id) }}</td>
                        <td>{{ number_format($reservation->price, 0, ',', '.') }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td style="text-align: center;">{{ $reservation->time }}</td>
                        <td>{{ $reservation->breakfast}}</td>
                        <td class="text-right">{{ number_format($reservation->total, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>