<?php
  namespace Database\Seeders;  
  
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Said',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('password123'),
            'role' => 'staff',
        ]);

        User::create([
            'name' => 'Ayoub',
            'email' => 'candidat@gmail.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
