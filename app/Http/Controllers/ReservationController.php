<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;

class ReservationController extends Controller
{
    public function index()
    {
        // Fetch all reservations from the database
        $reservations = Booking::all();

        // Pass reservations data to the view
        return view('reservations.index', compact('reservations'));
    }

    public function roomStats()
    {
        // Kalkulasi Statistik untuk type kamar
        $roomTypes = ['standart', 'deluxe', 'familly'];
        $roomStats = [];

        foreach ($roomTypes as $roomType) {
            // Menghitung total jumlah pemesanan untuk tipe kamar tertentu
            $totalBookings = Booking::where('room_id', $roomType)->count();
            // Menghitung total pendapatan untuk tipe kamar tertentu
            $totalRevenue = Booking::where('room_id', $roomType)->sum('total');

            // Menyimpan total jumlah pemesanan dan total pendapatan ke dalam array $roomStats
            $roomStats[$roomType] = [
                'totalBookings' => $totalBookings, // Total jumlah pemesanan untuk tipe kamar
                'totalRevenue' => $totalRevenue, // Total pendapatan untuk tipe kamar
            ];
        }

        // Meneruskan data statistik ruangan ke tampilan
        return view('reservations.room-stats', compact('roomStats'));
    }
}