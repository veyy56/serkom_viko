<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotelku.com</title>
      <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
          <a class="nav-link " aria-current="page" href="{{route ('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route ('create')}}">Pesan Kamar</a>
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
    
    <style> 
    .form{
        margin-bottom: 8px;
    }

    
    
    </style>
    <div class="container mb-6 mt-3">
        <h1 class="text-center">Form Pemesanan Layanan Kamar</h1>

        @if (session('success'))
          <div class="alert alert-success">
              {{session('success')}}
      </div>
      @endif

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

        <form class="form" action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Lengkap" aria-describedby="namaPemesanHelp">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <div class="form-check form-check ">  <input type="radio" class="form-check-input" id="gender" name="gender" value="lakiLaki" checked>
                    <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                <div class="form-check-inline form-check mb -3 ">  <input type="radio" class="form-check-input" id="gender" name="gender" value="perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">Nomor Identitas</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan Nomer Identitas" aria-describedby="nomorIdentitasHelp">
            </div>

            <div class="mb-3">
                <label for="room_id" class="form-label">Tipe Kamar</label>
                <select class="form-select" id="room_id" name="room_id" onchange="updatePrice()">
                    <option value="standart">STANDAR</option>
                    <option value="deluxe">DELUXE</option>
                    <option value="familly">FAMILLY</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga Kamar</label>
                <input type="text" class="form-control" id="price" name="price" readonly>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Durasi Menginap (Hari)</label>
                <input type="text" class="form-control" id="time" name="time">
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="breakfast" name="breakfast" value="1">
                <label class="form-check-label" for="breakfast">Termasuk Breakfast</label>
            </div>

            <div class="mb-3">
                <label for="total" class="form-label">Total Bayar</label>
                <input type="text" class="form-control" id="total" name="total">
            </div>
        
            <button type="button" id="hitungTotal" class="btn btn-warning">Hitung Total Bayar</button>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" onclick="goBack()"  class="btn btn-danger">Cancel</button>
        
    </form>
</div>

<!-- Masukkan link ke file JavaScript Anda di sini -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fungsi untuk menghitung total bayar
        function hitungTotal() {
            var price = parseFloat(document.getElementById('price').value);
            var time = parseFloat(document.getElementById('time').value);
            var breakfastChecked = document.getElementById('breakfast').checked;
            var total = price * time;

            // Tambah biaya breakfast jika checkbox breakfast dipilih
            if (breakfastChecked) {
                var totalharga;
                total += 80000 * time;
                totalharga = total; // Harga breakfast
            }

            // Diskon 10% jika menginap lebih dari 3 hari
            if (time > 3) {
                var totaldiskon;
                var diskon = total * 0.1;
                totaldiskon = total - diskon;
            }

            // Tampilkan total di dalam input total bayar
            if (time > 3) {
                document.getElementById('total').value = totaldiskon;
            } else {
                document.getElementById('total').value = total;
            }
            
        }

        // Panggil fungsi hitungTotal saat tombol "Hitung Total Bayar" diklik
        document.getElementById('hitungTotal').addEventListener('click', hitungTotal);
    });
    function updatePrice() {
        var roomType = document.getElementById("room_id").value;
        var priceInput = document.getElementById("price");
        
        // Set harga kamar berdasarkan tipe kamar yang dipilih
        if (roomType === "standart") {
            // Harga untuk tipe kamar deluxe
            priceInput.value = "100000"; 
        } else if (roomType === "deluxe") {
            // Harga untuk tipe kamar standar
            priceInput.value = "400000"; 
        } else if (roomType === "familly") {
            // Harga untuk tipe kamar suite
            priceInput.value = "1000000"; 
        }
        }
        
        function goBack() {
        window.history.back();
    }
</script>

    </div>
