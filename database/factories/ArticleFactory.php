<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->text($maxNbChars = 50),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->text(),
            'content' => $this->faker->text(),
            'file' => 'article.txt',
            'category_id' => rand(1,15),
            'author_id' => rand(1,10),
            'source_id' => rand(1,10),
            'is_active' => 1,
            'is_featured' => 1,
        ];
    }
}
