<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Store;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
{
    dd(Store::count());
    // Get the user's public IP address (works in deployed environment)
    //$ip = request()->ip(); 
$ip='154.80.1.202';
    // Fetch location data from IP-API service
    $response = Http::get("http://ip-api.com/json/{$ip}");
    $locationData = $response->json();

    // Extract latitude and longitude from the response
    $latitude = $locationData['lat'];
    $longitude = $locationData['lon'];

    // Fetch nearby stores within a certain distance (e.g., 10 km) using Store model
    $nearbyStores = Store::whereRaw('ST_Distance_Sphere(point(longitude, latitude), point(?, ?)) < ?', [$longitude, $latitude, 5000])
                        ->get(); // Stores within a 10km radius

    // Pass the user's location and nearby stores to the view
    return view('store', [
        'location' => $locationData,
        'stores' => $nearbyStores
    ]);
}

 
}
