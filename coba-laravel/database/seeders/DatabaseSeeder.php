<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Carbon\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-rogramming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium, odio neque sit perspiciatis itaque expedita eveniet? Labore excepturi obcaecati temporibus quia. Asperiores, ducimus. Tenetur, dolorum ipsum? In hic neque deserunt enim adipisci ab impedit voluptatum iusto pariatur voluptatem dolorem autem repellendus distinctio rem molestiae nemo, similique unde, sit sed necessitatibus labore magnam! Ullam facere nostrum suscipit laboriosam quisquam ab voluptas excepturi laudantium magni consectetur eveniet est nulla possimus eum numquam, corrupti adipisci dolorum alias dicta libero sequi hic reiciendis! Saepe, itaque et id eveniet ipsa delectus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium, odio neque sit perspiciatis itaque expedita eveniet? Labore excepturi obcaecati temporibus quia. Asperiores, ducimus. Tenetur, dolorum ipsum? In hic neque deserunt enim adipisci ab impedit voluptatum iusto pariatur voluptatem dolorem autem repellendus distinctio rem molestiae nemo, similique unde, sit sed necessitatibus labore magnam! Ullam facere nostrum suscipit laboriosam quisquam ab voluptas excepturi laudantium magni consectetur eveniet est nulla possimus eum numquam, corrupti adipisci dolorum alias dicta libero sequi hic reiciendis! Saepe, itaque et id eveniet ipsa delectus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium, odio neque sit perspiciatis itaque expedita eveniet? Labore excepturi obcaecati temporibus quia. Asperiores, ducimus. Tenetur, dolorum ipsum? In hic neque deserunt enim adipisci ab impedit voluptatum iusto pariatur voluptatem dolorem autem repellendus distinctio rem molestiae nemo, similique unde, sit sed necessitatibus labore magnam! Ullam facere nostrum suscipit laboriosam quisquam ab voluptas excepturi laudantium magni consectetur eveniet est nulla possimus eum numquam, corrupti adipisci dolorum alias dicta libero sequi hic reiciendis! Saepe, itaque et id eveniet ipsa delectus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis voluptatem ducimus veniam doloribus soluta qui earum laboriosam, illo quaerat quis ullam praesentium, odio neque sit perspiciatis itaque expedita eveniet? Labore excepturi obcaecati temporibus quia. Asperiores, ducimus. Tenetur, dolorum ipsum? In hic neque deserunt enim adipisci ab impedit voluptatum iusto pariatur voluptatem dolorem autem repellendus distinctio rem molestiae nemo, similique unde, sit sed necessitatibus labore magnam! Ullam facere nostrum suscipit laboriosam quisquam ab voluptas excepturi laudantium magni consectetur eveniet est nulla possimus eum numquam, corrupti adipisci dolorum alias dicta libero sequi hic reiciendis! Saepe, itaque et id eveniet ipsa delectus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
