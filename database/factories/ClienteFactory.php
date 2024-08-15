<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_o_razon' => fake()->name() . ' ' . fake()->lastName(),
            'direccion' => fake()->address(),
            'telefono' => '99887766',
            'genero' => 'Masculino',
            'fecha_nac' => '200-12-01',
            'correo' => fake()->unique()->safeEmail(),
        ];
    }
}
