<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        $Gender = ['Male', 'Female', 'Unisex'];
        $title = $this->faker->text($maxNbChars = 50);
        return [
            'title' => $title,
            'slug' => strtolower(str_replace(' ' , '-' ,$title)),
            'description' => $this->faker->text(),
            'content' => $this->faker->text(),
            'image' => 'product.jpg',
            'status' => 'Available',
            'sku' => $this->faker->unique()->text($maxNbChars = 6),
            'color' =>  $this->faker->text($maxNbChars = 10),
            'size' =>  $this->faker->text($maxNbChars = 6),
            'price' => rand(1,8),
            'for_gender' => $Gender[rand(0,2)],
            'category_id' => rand(1,15),
            'search_index' =>$title,
            'qty' => 999,
            'is_featured' => 1,
            'user_id' => 1,
        ];
    }
}
