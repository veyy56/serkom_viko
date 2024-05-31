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
        // Calculate statistics for each room type
        $roomTypes = ['standart', 'deluxe', 'familly'];
        $roomStats = [];

        foreach ($roomTypes as $roomType) {
            $totalBookings = Booking::where('room_id', $roomType)->count();
            $totalRevenue = Booking::where('room_id', $roomType)->sum('total');

            $roomStats[$roomType] = [
                'totalBookings' => $totalBookings,
                'totalRevenue' => $totalRevenue,
            ];
        }

        // Pass room stats data to the view
        return view('reservations.room-stats', compact('roomStats'));
    }
}