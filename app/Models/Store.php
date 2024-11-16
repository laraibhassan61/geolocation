<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $table = 'stores';

    // Define the fillable fields for mass assignment
    protected $fillable = ['store_name', 'latitude', 'longitude'];
}
