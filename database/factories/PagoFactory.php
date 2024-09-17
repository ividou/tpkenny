<?php

namespace Database\Factories;

use App\Models\Pago;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pago>
 */
class PagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pedido_id' => Pedido::factory(),
            'monto' => $this->faker->randomFloat(2, 50, 5000),
            'fecha_pago' => $this->faker->date(),
            'metodo_pago' => $this->faker->randomElement(['tarjeta de crédito', 'transferencia bancaria', 'efectivo', 'paypal']),
        ];
    }
}
