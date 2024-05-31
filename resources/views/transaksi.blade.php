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
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .booking-item {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }

        .booking-item label {
            font-weight: bold;
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
        <style>
        .booking-item label {
          display: inline-block;
          width: 150px; /* Adjust this width as needed */
          padding-right: 10px; /* Add padding for the colon */
          }

        .booking-item label span {
            display: inline-block;
            width: 10px; /* Width of the colon */
            text-align: center;
          }
        </style>

        <div class="container">
        
        
    <h1 class="text-center">Hasil Pemesanan</h1>
    @if(isset($booking))
        <div class="booking-item">
        <div class="row">
        <div class="col-md-6">
            <label>Nama Pemesan     </label> : {{ $booking->name }}<br>
            <label>Nomor Identitas  </label> : {{ $booking->nik }}<br>
            <label>Jenis Kelamin    </label> : {{ $booking->gender }}<br>
            <label>Tipe Kamar       </label> : {{ $booking->room_id }}<br>
            <label>Harga Kamar      </label> : Rp. {{number_format($booking->price,0)}}<br>
            <label>Tanggal Pesan    </label> : {{ $booking->date }}<br>
            <label>Durasi Menginap  </label> : {{ $booking->time }} Hari<br>
            <label>Breakfast        </label> : {{ $booking->breakfast }}<br>
            <label>Diskon</label> : 
            @php
                $total = $booking->total;
                if ($booking->time > 2) {
                    echo "Terdapat Diskon (10%)<br>";
                } else {
                    echo "Tidak Ada Diskon<br>";
                }
            @endphp
            <label>Total Bayar      </label> : Rp. {{ number_format($booking->total, 0) }}<br>
           
        </div>
        </div>
        </div>
        @else
        <p>Tidak ada booking yang tersedia.</p>
        @endif

</body>
</html>