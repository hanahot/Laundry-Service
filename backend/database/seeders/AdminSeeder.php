<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        \App\Models\Admin::factory()->create([
            'appointment_no' => 3301,
            'customer_address' => 'Talamban, Cebu City',
            'type_of_service' => 'Standard Service',
            'total' => 999,
            'driver_name' => 'Eduardo S. Quinto',
            'book_date' => now(),
            'date_delivered' => now(),
            'created_at' => now(),
            'updated_at'=>now()
        ]);
        
        \App\Models\Admin::factory()->create([
            'appointment_no' => 3301,
            'customer_address' => 'Talamban, Cebu City',
            'type_of_service' => 'Standard Service',
            'total' => 999,
            'driver_name' => 'Anecito D. Donan',
            'book_date' => now(),
            'date_delivered' => now(),
            'created_at' => now(),
            'updated_at'=>now()
        ]);
    }
}