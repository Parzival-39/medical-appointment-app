<?php

namespace Database\Seeders;

//use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //LLamar a los seeders creados
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        //Crear usuario de prueba cada vez que se ejecutan las migraciones
        //User::factory()->create([
         //   'name' => 'Test User',
          //  'email' => 'patriciorola30@gmail.com',
           // 'password' => bcrypt('12345678')
        //]);
    }
}

