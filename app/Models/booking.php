<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'name',
        'gender',
        'nik',
        'room_id',
        'price',
        'date',
        'time',
        'breakfast',
        'total'
    ];
    use HasFactory;

}
