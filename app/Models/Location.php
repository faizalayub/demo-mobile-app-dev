<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table      = 'location';
    protected $guarded    = [];
    public    $timestamps = true;

    protected $fillable = [
        'name',
        'state'
    ];
}
