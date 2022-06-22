<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('admin'),
            'role_id' => '999',
        ]);
        User::create([
            'id' => '2',
            'name' => 'user',
            'email' => 'user@user.nl',
            'password' => bcrypt('password'),
        ]);
    }
}
