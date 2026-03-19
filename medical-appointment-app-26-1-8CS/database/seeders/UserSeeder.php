<?php

namespace Database\Seeders;
use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear un usuario prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'), 
            'id_number' => '123456789',
            'phone_number' => '999999999',
            'address' => 'Test Address',
        ])->assignRole('Administrador'); //Asignar el rol de administrador al usuario creado
    }
}
