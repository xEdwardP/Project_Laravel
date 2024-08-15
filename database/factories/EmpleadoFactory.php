<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => fake()->unique()->buildingNumber(),
            'rtn' => fake()->unique()->ean13(),
            'nombre' => fake()->name() . ' ' . fake()->lastName(),
            'direccion' => fake()->address(),
            'telefono' => fake()->tollFreePhoneNumber(),
            'genero' => 'Masculino',
            'correo' => fake()->unique()->safeEmail(), 
        ];
    }
}
