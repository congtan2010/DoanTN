<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('coaches')->insert([
            'license_plate' => '37a-1',
            'coach_maintenance_date' => '2024-06-06',
            'service' => 'Hàng hóa',
            'vehicle_type' => 'Thường',
            'sum_ticket' => '34',
        ]);
        DB::table('coaches')->insert([
            'license_plate' => '37a-2',
            'coach_maintenance_date' => '2024-06-06',
            'service' => 'Người',
            'vehicle_type' => 'vip',
            'sum_ticket' => '28'
        ]);
        DB::table('coaches')->insert([
            'license_plate' => '37a-3',
            'coach_maintenance_date' => '2024-06-06',
            'service' => 'Người',
            'vehicle_type' => 'Thường',
            'sum_ticket' => '34'

        ]);
    }
}
