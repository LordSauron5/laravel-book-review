<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create 33 - books and create random good reviews
        Book::factory(33)->create()->each(function (Book $book) {
            $numReviews = random_int(5, 30);

            Review::factory()->count($numReviews)
            ->good()
            ->for($book)
            ->create();
        });
        
        // create 33 - books and create random average reviews
        Book::factory(33)->create()->each(function (Book $book) {
            $numReviews = random_int(5, 30);

            Review::factory()->count($numReviews)
            ->average()
            ->for($book)
            ->create();
        });
        // create 33 - books and create random bad reviews
        Book::factory(33)->create()->each(function (Book $book) {
            $numReviews = random_int(5, 30);

            Review::factory()->count($numReviews)
            ->bad()
            ->for($book)
            ->create();
        });

    }
}
