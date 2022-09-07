<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'email'=> 'admin@admin.com',
        'name'=> 'Admin',
        'password'=> Hash::make('passer1234'),
        'role'=> User::ADMIN_ROLE
      ]);
    }
}
