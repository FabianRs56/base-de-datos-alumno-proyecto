<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocumentType>
 */
class DocumentTypeFactory extends Factory
{
    // sirve para crear pruebas
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'Name'=>$this->faker->name,
            'Expiration'=>random_int(1,20),
            'Code'=>Str::uuid(),
        ];
    }
}
