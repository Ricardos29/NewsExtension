<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Tags
        $tag1 = Tag::create([
            'title' => 'Sporting CP',
            'color' => '#04805e'      
        ]);

        $tag2 = Tag::create([
            'title' => 'SL Benfica',
            'color' => '#ee1b23'       
        ]);

        $tag3 = Tag::create([
            'title' => 'FC Porto', 
            'color' => '#0070bc'        
        ]);

        // Categories
        $category1 = Category::create([
            'title' => 'Futebol'        
        ]); 

        // Posts
        $post1 = Post::create([
            'title' => 'Nova Contratação',
            'body' => 'Rochinha assina pelo Sporting CP'
        ]);
        $post1->tags()->sync($tag1);
        $post1->categories()->sync($category1);

        $post2 = Post::create([
            'title' => 'Rumor Transferência',
            'body' => 'Aouar oferecido ao Benfica'
        ]);
        $post2->tags()->sync($tag2);
        $post2->categories()->sync($category1);

        $post3 = Post::create([
            'title' => 'Nova Contratação',
            'body' => 'David Carmo assina pelo FC Porto'
        ]);
        $post3->tags()->sync($tag3);
        $post3->categories()->sync($category1);

    }
}
