<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Article;
use App\Models\Audio;
use App\Models\Product;
use App\Models\Resource;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Str;
use Hash;
use Illuminate\Database\Seeder;
use Faker\Factory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        //     'code' =>  mt_rand(100000, 999999),
        // ]);
        // Book::factory(10)->create();
        Product::factory(10)->create();
        // Audio::factory(10)->create();
        // Video::factory(10)->create();

        // $this->call([
        //     BookSeeder::class,
        // ]);
    }
}
