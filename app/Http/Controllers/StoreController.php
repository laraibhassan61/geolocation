<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $ipAddress = $this->getClientIp(); // Get the user's public IP address
        return view('store', compact('ipAddress')); // Pass the IP address to the view
    }

    private function getClientIp() {
        // Check for 'X-Forwarded-For' header for proxies
        if (request()->server('HTTP_X_FORWARDED_FOR')) {
            $ip = request()->server('HTTP_X_FORWARDED_FOR');
        } else {
            $ip = request()->ip(); // Get IP if not behind proxy
        }
        return $ip;
    }
}
