<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class BookingController extends Controller
{

    public function store(request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'nik' => 'required|size:16',
            'room_id' => 'required|max:255',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|numeric',
            'total' => 'required|numeric',
        ],
            [
                'nik.size' => 'Isian salah..data harus 16 digit',
                'time.numeric' => 'Harus isi angka untuk durasi menginap',
        ]);

        $breakfast = $request->has('breakfast') ? 'Ya' : 'Tidak';

        // Simpan data ke dalam database
        $booking = Booking::create([
            'name' => $validatedData['name'],
            'gender' => $validatedData['gender'],
            'nik' => $validatedData['nik'],
            'room_id' => $validatedData['room_id'],
            'price' => $validatedData['price'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'breakfast' => $breakfast,
            'total' => $validatedData['total'],
        ]);

        
        
        return redirect()->route('booking.show', ['id' => $booking->id]);

    }
    public function show($id)
    {
        // Mengambil data booking berdasarkan ID
        $booking = Booking::findOrFail($id); // Jika ID tidak ditemukan, akan menghasilkan error 404
        // Mengirim data booking ke view
        return view('transaksi', compact('booking'));
    }
     
    public function create ()
    {
        return view ('create');
    }

    public function home()
    {
        return view ('home');
    }

    public function about()
    {
        return view ('about');
    }

    public function standart()
    {
        return view ('standart');
    }

    public function deluxe()
    {
        return view ('deluxe');
    }

    public function familly()
    {
        return view ('familly');
    }


}
