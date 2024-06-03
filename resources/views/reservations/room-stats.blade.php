<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Pembelian Kamar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    <div class="container mt-3">
        <h2 class="text-center mt-5">Statistik Pembelian Kamar</h2>
        <canvas id="roomStatsChart"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Grafik untuk keluaran dari rekapan jumlah pemesanan
            var ctx = document.getElementById('roomStatsChart').getContext('2d');
            // Mengambil data statistik kamar dalam format JSON dari variabel server-side $roomStats
            var roomStats = @json($roomStats);
            // Membuat label dari kunci objek roomStats dan mengubah huruf pertama menjadi huruf kapital
            var labels = Object.keys(roomStats).map(key => key.charAt(0).toUpperCase() + key.slice(1));
            // Mengambil nilai total pemesanan dari objek roomStats
            var data = Object.values(roomStats).map(stat => stat.totalBookings);
            // Mendefinisikan warna untuk masing-masing batang grafik
            var colors = ['red', 'green', 'blue'];

            // Grafik batang menggunakan Chart.JS
            var roomStatsChart = new Chart(ctx, {
              // Jenis grafik adalah grafik batang
              type: 'bar',
                data: {
                    labels: labels, // Label untuk sumbu-x grafik
                    datasets: [{
                        label : 'total pemesanan', // Label untuk dataset
                        data: data, // Data yang akan ditampilkan pada grafik
                        backgroundColor: colors // Warna latar belakang batang
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false 
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true //Memulai sumbu-y dari nol
                        }
                    }
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>