<?php

namespace Database\Seeders;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::truncate();
        Category::truncate();
        Post::truncate();
        Post::factory(10)->create();
        //\App\Models\User::factory(10)->create();
        /*
        $user = User::factory()->create();
        $personal = Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);
        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=> 'My first post',
            'slug'=> 'my-first-post',
            'excerpt'=>'<p>You think water moves fast?</p>',
            'body'=>"<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>"

        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=> 'My second post',
            'slug'=> 'my-second-post',
            'excerpt'=>'<p>Now that there is the Tec-9</p>',
            'body'=>"<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit. </p>"

        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=> 'My Third post',
            'slug'=> 'my-third-post',
            'excerpt'=>'<p>Do you see any Teletubbies in here?</p>',
            'body'=>"<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>"

        ]);*/
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
