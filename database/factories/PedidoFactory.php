<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition()
    {
        return [
            'cliente_id' => Cliente::factory(),
            'fecha_pedido' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['pendiente', 'procesado', 'enviado', 'entregado', 'cancelado']),
            'total' => $this->faker->randomFloat(2, 50, 5000),
        ];
    }
}
