<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Resource::class;

    public function definition()
    {
        return [
            'title' => $this->faker->text($maxNbChars = 50),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->text(),
            'content' => $this->faker->text(),
            'type' => $this->faker->text(),
            'file' => 'audio.mp3', // password
            'category_id' => rand(1,15), // password
            'author_id' => rand(1,10), // password
            'source_id' => rand(1,10), // password
            'is_active' => 1, // password
            'is_featured' => 1, // password
        ];
    }
}
