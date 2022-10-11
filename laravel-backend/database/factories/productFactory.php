<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name,
            'slug'=>fake()->name,
            'price'=>fake()->name,
            'description'=>fake()->text,
            'quantity'=>fake()->name,
            'featured'=>0,
            'image'=>'https://media.bleacherreport.com/image/upload/w_800,h_533,c_fill/v1635774603/j2l6jcq4aq6cqbzqrtyy.jpg'
        ];
    }
}
