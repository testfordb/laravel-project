<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $articles = [
            ['title' => 'Test Title 1', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-01.jpg'],
            ['title' => 'Test Title 2', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-02.jpg'],
            ['title' => 'Test Title 3', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-03.jpg'],
            ['title' => 'Test Title 4', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-04.jpg'],
            ['title' => 'Test Title 5', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-05.jpg'],
            ['title' => 'Test Title 6', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-06.jpg'],
            ['title' => 'Test Title 7', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-07.jpg'],
            ['title' => 'Test Title 8', 'content' => 'Lorem ipsum dolor sit amet...', 'image' => 'cat-08.jpg'],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}