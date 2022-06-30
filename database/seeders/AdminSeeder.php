<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Teacher;

class AdminSeeder extends Seeder
{
    
    public function run()
    {
        //
        Teacher::create([
            'name' => 'golu',
            'email' => 'golujha304@gmail.com',
            'password' =>'12345678'
        ]);
    }
}
