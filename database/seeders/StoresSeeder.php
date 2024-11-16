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

        Store::create([
            'store_name' => 'Store 1',
            'latitude' => 31.5659279446683,
            'longitude' => 74.28933517339328,
        ]);
        
        Store::create([
            'store_name' => 'Store 2',
            'latitude' => 31.559766315044993,
            'longitude' => 74.2955251798058,
        ]);
        
        Store::create([
            'store_name' => 'Store 3',
            'latitude' => 31.564387659903716,
            'longitude' => 74.29864776008779,
        ]);


        $stores = [
            ['store_name' => 'Store 1', 'latitude' => 31.5659279446683, 'longitude' => 74.28933517339328],
            ['store_name' => 'Store 2', 'latitude' => 31.559766315044993, 'longitude' => 74.2955251798058],
            ['store_name' => 'Store 3', 'latitude' => 31.564387659903716, 'longitude' => 74.29864776008779],
            ['store_name' => 'Store 4', 'latitude' => 31.5497, 'longitude' => 74.3436], // Lahore
            ['store_name' => 'Store 5', 'latitude' => 31.5204, 'longitude' => 74.3587], // Lahore
            ['store_name' => 'Store 6', 'latitude' => 32.0836, 'longitude' => 73.1557], // Faisalabad
            ['store_name' => 'Store 7', 'latitude' => 33.6844, 'longitude' => 73.0479], // Rawalpindi
            ['store_name' => 'Store 8', 'latitude' => 31.6150, 'longitude' => 73.0335], // Multan
            ['store_name' => 'Store 9', 'latitude' => 32.0853, 'longitude' => 72.6748], // Sargodha
            ['store_name' => 'Store 10', 'latitude' => 30.0668, 'longitude' => 74.1945], // Gujranwala
        ];
        
        foreach ($stores as $store) {
            Store::create($store);
        }
    }
}
