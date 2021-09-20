<?php

namespace Database\Factories;

use App\Models\TanggungJawab;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TanggungJawabFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TanggungJawab::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->randomElement(['admin', 'editor', 'member', 'guest']),
            'name' => $this->faker->randomElement(['Administrator', 'Editorial', 'Member', 'Guest']),
        ];
    }
}
