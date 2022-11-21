<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Video::class;

    public function definition()
    {
        return [
            'title' => $this->faker->text($maxNbChars = 50),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->text(),
            'content' => $this->faker->text(),
            'link' => $this->faker->url(),
            'image' => 'video.jpg',
            'category_id' => rand(1,15),
            'author_id' => rand(1,10),
            'source_id' => rand(1,10),
            'is_active' => 1,
            'is_featured' => 1,
        ];
    }
}
