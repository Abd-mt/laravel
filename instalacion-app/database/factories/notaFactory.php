<?php

namespace Database\Factories;

use App\Models\nota;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nota>
 */
class notaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = nota::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo'=>$this->faker->sentence(),
            'texto'=>$this->faker->paragraph(),
            'importancia'=>$this->faker->randomElement(['poco importante','importante','muy importante']), 
            'hora'=>$this->faker->date()
        ];
    }
}
