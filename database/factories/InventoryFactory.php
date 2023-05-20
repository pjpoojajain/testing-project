<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
           // 'description' => $this->faker->description,
           // 'author' => $this->faker->author,
           // 'category' => $this->faker->category,
           // 'title' => $this->faker->title,
            //'published_year' => $this->faker->published_year,
           // 'price' => $this->faker->price,
           // 'condition' => $this->faker->condition,
           // 'qty' => $this->faker->qty,
           // 'remember_token' => Str::random(10),
        ];
    }
}
