<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drone extends Model
{
    protected $fillable = [
        'id', 'name', 'model', 'brand', 'airworthiness', 'operational', 'internalSerial', 'printedSerial', 'remoteID', 'registration', 'purchased', 'notes'
    ];

    // Nonaktifkan timestamps karena API tidak menyediakan informasi tersebut
    public $timestamps = false;
}

