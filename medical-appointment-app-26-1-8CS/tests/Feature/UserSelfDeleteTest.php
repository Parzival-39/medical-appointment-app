<?php

use App\Models\User;
use illuminate\Foundation\Testing\RefreshDatabase;

//Refresca la base de datos después de cada test
uses(RefreshDatabase::class);

test('un usuario no puede eliminar su cuenta si no tiene contraseña', function () {
    
//1) Crear usuario en la BD de pruebas
    $user = User::factory()->create(
        [
            'email_verified_at' => now(),
        ]
    );

//2) Simular que el usuario ha iniciado sesión
    $this->actingAS($user, 'web');

// 3) Simular que intenta eliminar su cuenta
    $response = $this->delete(route('admin.users.destroy', $user));

// 4) Esperar a que el servidor bloquee esta acción
    $response->assertStatus(403);

// 5) Verificar que el usuario siga en la base de datos
    $this->assertDatabaseHas('users', [
        'id' => $user->id,
    ]);
});