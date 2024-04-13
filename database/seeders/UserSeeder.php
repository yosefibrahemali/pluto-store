<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'yosef',
            'email'=>'gargumy1@gmail.com',
            'password'=>Hash::make('ly0913279409'),
            'utype'=>'ADM'
        ]);
    }
}
