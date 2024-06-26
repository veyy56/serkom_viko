<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotelku.com</title>
      <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body?>

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
          <a class="nav-link active" href="{{route ('create')}}">Pesan Kamar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Type Kamar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="{{route ('standart')}}">Standar Class</a></li>
            <li><a class="dropdown-item" href="{{route ('deluxe')}}">Deluxe Class</a></li>
            <li><a class="dropdown-item " href="{{route ('familly')}}">Familly Class</a></li>
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
    
    <style> 
    .form{
        margin-bottom: 8px;
    }

    /* Styling untuk form */
.form-container {
  max-width: 400px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

/* Styling untuk tombol */
.btn {
  background-color: #212529;
  color: #fff;
  border: none;
  padding: 10px 20px;
  margin-top: 10px;
  border-radius: 10px;
  cursor: pointer;
}

.btn:hover {
  background-color: #ff9800;
}

/* Styling untuk label */
.form-label {
  font-weight: bold;
}

/* Styling untuk input */
.form-control {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Styling untuk checkbox */
.form-check-input {
  margin-top: 7px;
}

/* Styling untuk select */
.form-select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Styling untuk div yang menampilkan harga dan total */
.form-display {
  font-weight: bold;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Styling untuk tombol Hitung Total Bayar */
#hitungTotal {
  margin-right: 10px;
}

    
    </style>
  <div class="container mb-6 mt-3">
    <h1 class="text-center">Form Pemesanan</h1>

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
        <div class="form-check form-check">
          <input type="radio" class="form-check-input" id="Laki-laki" name="gender" value="Laki-laki" checked>
          <label class="form-check-label" for="Laki-laki">Laki-laki</label>
        </div>
        <div class="form-check-inline form-check mb-3">
          <input type="radio" class="form-check-input" id="perempuan" name="gender" value="perempuan">
          <label class="form-check-label" for="perempuan">Perempuan</label>
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
        <input type="hidden" id="price" name="price">
        <div id="price_display" class="form-control"></div>
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
        <input type="hidden" id="total" name="total">
        <div id="total_display" class="form-control"></div>
      </div>

      <button type="button" id="hitungTotal" class="btn btn-warning">Hitung Total Bayar</button>
      <button type="submit" class="btn btn-warning">Simpan</button>
      <button type="button" onclick="goBack()" class="btn btn-warning">Cancel</button>

    </form>
  </div>

<!-- Masukkan link ke file JavaScript Anda di sini -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Fungsi Format rupiah afar format angka mata uang Rupiah
      function formatRupiah(angka, prefix) {
        // Menghapus karakter bukan angka dan tanda komat di tampilan angka
          var number_string = angka.replace(/[^,\d]/g, '').toString(),
          // Pemisah angka dengan tanda koma format rupiah
              split = number_string.split(','),
              sisa = split[0].length % 3,
              rupiah = split[0].substr(0, sisa),
              ribuan = split[0].substr(sisa).match(/\d{3}/gi);
          // Format ribuah
          if (ribuan) {
              var separator = sisa ? '.' : '';
              rupiah += separator + ribuan.join('.');
          }
          // Menambah desimal jika ada
          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          // Mengembalikan string dalam format Rupiah dengan atau tanpa prefix "Rp."
          return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
      }
      // Untuk mengupdate harga
      function updatePrice() {
          var roomType = document.getElementById("room_id").value;
          var priceInput = document.getElementById("price");
          var priceDisplay = document.getElementById("price_display");

          console.log("Room type selected: " + roomType);

          // Set harga kamar berdasarkan tipe kamar yang dipilih
          if (roomType === "standart") {
              priceInput.value = "100000";
          } else if (roomType === "deluxe") {
              priceInput.value = "500000"; 
          } else if (roomType === "familly") {
              priceInput.value = "1000000"; 
          }

          console.log("Price set to: " + priceInput.value);

          // Update tampilan harga terformat
          priceDisplay.textContent = formatRupiah(priceInput.value, 'Rp. ');
      }
      // Hitung total 
      function hitungTotal() {
          var price = parseFloat(document.getElementById('price').value);
          var time = parseFloat(document.getElementById('time').value);
          var breakfastChecked = document.getElementById('breakfast').checked;
          var totalRoomCost = price * time;
          var breakfastCost = 0;

          // Tambah biaya breakfast jika checkbox breakfast dipilih
          if (breakfastChecked) {
              breakfastCost = 80000 * time;
          }

          var totalCost = totalRoomCost + breakfastCost;

          // Diskon 10% jika menginap lebih dari 3 hari, tetapi tidak termasuk biaya breakfast
          if (time > 2) {
              totalRoomCost = totalRoomCost * 0.9;
          }

          totalCost = totalRoomCost + breakfastCost;

          // Tampilkan total di dalam input total bayar
          document.getElementById('total').value = totalCost;
          document.getElementById('total_display').textContent = formatRupiah(totalCost.toString(), 'Rp. ');
      }

      // Update Harga
      document.getElementById('hitungTotal').addEventListener('click', hitungTotal);
      document.getElementById('room_id').addEventListener('change', updatePrice);
      updatePrice(); 
    });

    // Fungsi untuk menampilkan kembali ke halaman sebelumnya
    function goBack() {
      window.history.back();
    }
  </script>
    </body>
    </html>
    