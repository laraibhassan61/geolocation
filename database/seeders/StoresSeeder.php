<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::create([
            'store_name' => 'Store 1',
            'latitude' => 40.712776, // New York, NY
            'longitude' => -74.005974,
        ]);

        Store::create([
            'store_name' => 'Store 2',
            'latitude' => 34.052235, // Los Angeles, CA
            'longitude' => -118.243683,
        ]);

        Store::create([
            'store_name' => 'Store 3',
            'latitude' => 41.878113, // Chicago, IL
            'longitude' => -87.629799,
        ]);

        Store::create([
            'store_name' => 'Store 4',
            'latitude' => 51.507351, // London, UK
            'longitude' => -0.127758,
        ]);

        Store::create([
            'store_name' => 'Store 5',
            'latitude' => 48.856613, // Paris, France
            'longitude' => 2.352222,
        ]);
    }
}
