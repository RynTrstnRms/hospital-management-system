<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("patients")->insert([
            [
                'first_name' => 'Allysa',
                'last_name' => 'Samante',
                'date_of_birth' => '2024-02-06', // Correct date format
                'gender' => 'Female',
                'address' => 'Binan',
                'phone' => '0285728975',
                'email' => 'samanteallysa@gmail.com',
                'emergency_contact' => '823698484',
                'medical_history' => 'diagnosed with cyst'
            ],
            [
                'first_name' => 'Jerald',
                'last_name' => 'Florendo',
                'date_of_birth' => '2024-02-06',
                'gender' => 'Male',
                'address' => 'Carmona',
                'phone' => '028572823745',
                'email' => 'jeraldflorendo@gmail.com',
                'emergency_contact' => '234498484',
                'medical_history' => 'has trangkaso'
            ],
            [
                'first_name' => 'Twinkle',
                'last_name' => 'Gorgia',
                'date_of_birth' => '2024-02-06',
                'gender' => 'Female',
                'address' => 'Cabuyao',
                'phone' => '02234985',
                'email' => 'twinkleStar@gmail.com',
                'emergency_contact' => '82345343454',
                'medical_history' => 'diagnosed with cyst'
            ],
            [
                'first_name' => 'Allysa',
                'last_name' => 'Samante',
                'date_of_birth' => '2024-02-06',
                'gender' => 'Female',
                'address' => 'Binan',
                'phone' => '0285728975',
                'email' => 'samanteallysa@gmail.com',
                'emergency_contact' => '823698484',
                'medical_history' => 'diagnosed with cyst'
            ],
        ]);        
        
    }
}
