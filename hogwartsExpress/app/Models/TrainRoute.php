<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'origin',
        'destination',
        'date',
        'departureTime',
        'arrivalTime',
        'routeLength',
        'availableSeats',
        'features',
        'img',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
