<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "profile_photo"=>'adminphoto.png',
            "name"=>'admin',
            "email"=>'admin@gmail.com',
            "password"=>bcrypt('admin@123')

            ]);
    }
}
