<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table("patients")->insert([
            [
                'first_name' => 'Allysa',
                'last_name' => 'Samante',
                'date_of_birth' => 'February 6, 2024',
                'gender' => 'Female',
                'address' => 'Binan',
                'phone' => '0285728975',
                'email' => 'samanteallysa@gmail.com',
                'emergency_contact' => '823698484',
                'medical_history' => 'diagnosed with cyst',
                'created_at'=> '12:30pm',
                'updated_at' => '3:00pm'
            ],
            [
                'first_name' => 'Jerald',
                'last_name' => 'Florendo',
                'date_of_birth' => 'February 6, 2024',
                'gender' => 'Male',
                'address' => 'Carmona',
                'phone' => '028572823745',
                'email' => 'jeraldflorendo@gmail.com',
                'emergency_contact' => '234498484',
                'medical_history' => 'has trangkaso',
                'created_at'=> '12:33pm',
                'updated_at' => '3:03pm'
            ],
            [
                'first_name' => 'Twinkle',
                'last_name' => 'Gorgia',
                'date_of_birth' => 'January 19, 2024',
                'gender' => 'Female',
                'address' => 'Cabuyao',
                'phone' => '02234985',
                'email' => 'twinkleStar@gmail.com',
                'emergency_contact' => '82345343454',
                'medical_history' => 'diagnosed with cyst',
                'created_at'=> '5:00pm',
                'updated_at' => '3:00pm'
            ],
            [
                'first_name' => 'Allysa',
                'last_name' => 'Samante',
                'date_of_birth' => 'February 6, 2024',
                'gender' => 'Female',
                'address' => 'Binan',
                'phone' => '0285728975',
                'email' => 'samanteallysa@gmail.com',
                'emergency_contact' => '823698484',
                'medical_history' => 'diagnosed with cyst',
                'created_at'=> '12:30pm',
                'updated_at' => '3:00pm'
            ],
        ]);        
        
    }
}
