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


        $stores = [
            ['store_name' => 'Store 1', 'latitude' => 31.5659, 'longitude' => 74.2893],
            ['store_name' => 'Store 2', 'latitude' => 31.5598, 'longitude' => 74.2955],
            ['store_name' => 'Store 3', 'latitude' => 31.5644, 'longitude' => 74.2986],
            ['store_name' => 'Store 4', 'latitude' => 31.5497, 'longitude' => 74.3436], // Lahore
            ['store_name' => 'Store 5', 'latitude' => 31.5204, 'longitude' => 74.3587], // Lahore
            ['store_name' => 'Store 6', 'latitude' => 32.0836, 'longitude' => 73.1557], // Faisalabad
            ['store_name' => 'Store 7', 'latitude' => 33.6844, 'longitude' => 73.0479], // Rawalpindi
            ['store_name' => 'Store 8', 'latitude' => 31.6150, 'longitude' => 73.0335], // Multan
            ['store_name' => 'Store 9', 'latitude' => 32.0853, 'longitude' => 72.6748], // Sargodha
            ['store_name' => 'Store 10', 'latitude' => 30.0668, 'longitude' => 74.1945], // Gujranwala
            ['store_name' => 'Store 11', 'latitude' => 32.0025, 'longitude' => 73.0551], // Lahore
            ['store_name' => 'Store 12', 'latitude' => 31.5081, 'longitude' => 74.3878], // Lahore
            ['store_name' => 'Store 13', 'latitude' => 33.6846, 'longitude' => 73.0479], // Rawalpindi
            ['store_name' => 'Store 14', 'latitude' => 31.5837, 'longitude' => 73.0835], // Lahore
            ['store_name' => 'Store 15', 'latitude' => 31.5628, 'longitude' => 74.2900], // Lahore
            ['store_name' => 'Store 16', 'latitude' => 31.7000, 'longitude' => 73.7333], // Okara
            ['store_name' => 'Store 17', 'latitude' => 31.8798, 'longitude' => 73.0735], // Jhelum
            ['store_name' => 'Store 18', 'latitude' => 32.0836, 'longitude' => 73.1407], // Faisalabad
            ['store_name' => 'Store 19', 'latitude' => 32.0427, 'longitude' => 72.6325], // Sargodha
            ['store_name' => 'Store 20', 'latitude' => 30.6268, 'longitude' => 73.1101], // Bahawalpur
            ['store_name' => 'Store 21', 'latitude' => 31.5820, 'longitude' => 74.3295], // Lahore
            ['store_name' => 'Store 22', 'latitude' => 32.1053, 'longitude' => 74.9788], // Chiniot
            ['store_name' => 'Store 23', 'latitude' => 33.0842, 'longitude' => 73.5189], // Rawalpindi
            ['store_name' => 'Store 24', 'latitude' => 31.4555, 'longitude' => 74.2520], // Lahore
            ['store_name' => 'Store 25', 'latitude' => 31.6143, 'longitude' => 73.0842], // Multan
            ['store_name' => 'Store 26', 'latitude' => 30.7925, 'longitude' => 74.2944], // Faisalabad
            ['store_name' => 'Store 27', 'latitude' => 31.4819, 'longitude' => 74.2956], // Lahore
            ['store_name' => 'Store 28', 'latitude' => 32.1183, 'longitude' => 73.5849], // Faisalabad
            ['store_name' => 'Store 29', 'latitude' => 33.6847, 'longitude' => 73.0479], // Rawalpindi
            ['store_name' => 'Store 30', 'latitude' => 32.0745, 'longitude' => 72.6654], // Sargodha
            ['store_name' => 'Store 31', 'latitude' => 30.0655, 'longitude' => 74.1328], // Gujranwala
            ['store_name' => 'Store 32', 'latitude' => 31.5204, 'longitude' => 74.3688], // Lahore
            ['store_name' => 'Store 33', 'latitude' => 31.2200, 'longitude' => 74.2774], // Lahore
            ['store_name' => 'Store 34', 'latitude' => 33.8486, 'longitude' => 73.0817], // Islamabad
            ['store_name' => 'Store 35', 'latitude' => 33.7358, 'longitude' => 73.0227], // Rawalpindi
            ['store_name' => 'Store 36', 'latitude' => 31.4624, 'longitude' => 74.2856], // Lahore
            ['store_name' => 'Store 37', 'latitude' => 30.5500, 'longitude' => 73.0601], // Multan
            ['store_name' => 'Store 38', 'latitude' => 32.0533, 'longitude' => 73.1688], // Faisalabad
            ['store_name' => 'Store 39', 'latitude' => 33.6594, 'longitude' => 73.1339], // Rawalpindi
            ['store_name' => 'Store 40', 'latitude' => 30.6471, 'longitude' => 74.1889], // Bahawalpur
            ['store_name' => 'Store 41', 'latitude' => 32.0803, 'longitude' => 72.6479], // Sargodha
            ['store_name' => 'Store 42', 'latitude' => 31.5327, 'longitude' => 74.3582], // Lahore
            ['store_name' => 'Store 43', 'latitude' => 31.6040, 'longitude' => 74.3702], // Lahore
            ['store_name' => 'Store 44', 'latitude' => 32.1049, 'longitude' => 73.1461], // Faisalabad
            ['store_name' => 'Store 45', 'latitude' => 30.6665, 'longitude' => 73.1212], // Bahawalpur
            ['store_name' => 'Store 46', 'latitude' => 32.0423, 'longitude' => 73.1465], // Sargodha
            ['store_name' => 'Store 47', 'latitude' => 31.6223, 'longitude' => 73.0350], // Multan
            ['store_name' => 'Store 48', 'latitude' => 32.1060, 'longitude' => 73.1850], // Faisalabad
            ['store_name' => 'Store 49', 'latitude' => 32.0319, 'longitude' => 73.1510], // Faisalabad
            ['store_name' => 'Store 50', 'latitude' => 30.6794, 'longitude' => 73.1890], // Multan
            // Add another 50 stores in the same format...
            ['store_name' => 'Store 51', 'latitude' => 31.4224, 'longitude' => 74.3790], // Lahore
            ['store_name' => 'Store 52', 'latitude' => 30.5250, 'longitude' => 74.3085], // Multan
            ['store_name' => 'Store 53', 'latitude' => 31.3242, 'longitude' => 74.2827], // Lahore
            // Continue this for 100 stores...
        ];
        
        foreach ($stores as $store) {
            Store::create($store);
        }
    }
}
