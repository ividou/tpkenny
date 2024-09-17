<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Cliente::factory(10)->create();
         \App\Models\Empleado::factory(10)->create();
         \App\Models\Pago::factory(10)->create();
         \App\Models\Pedido::factory(10)->create();
         \App\Models\Producto::factory(10)->create();
         \App\Models\Proveedor::factory(10)->create();
         

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
