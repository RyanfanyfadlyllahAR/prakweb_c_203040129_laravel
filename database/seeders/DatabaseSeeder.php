<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
    use App\Models\Category;
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
        

    //    User::create([
    //          'name' => 'Ryan fany fadlyllah Ar',
    //          'email' => 'fadlyllahfanny@gmail.com',
    //          'password' => bcrypt(12345)
    //      ]);
    //      User::create([
    //          'name' => 'fadlyllah Ar',
    //          'email' => 'fadlyllah@gmail.com',
    //          'password' => bcrypt(12345)
    //      ]);

         User::factory(3)->create();

        Category::create([
            'name'=> 'Web programing',
            'slug'=> 'web-programing'
        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-Design'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //         'category_id' => 1,
        //         'user_id' => 2,
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //         'body' => 'Iniriyan'
        //     ]);

        //     Post::create([
        //             'category_id' => 1,
        //             'user_id' => 2,
        //             'title' => 'Judul Kedua',
        //             'slug' => 'judul-ke-dua',
        //             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //             'body' => 'ini fanny'
        //         ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //     'body' => 'ininaonwe'
        // ]);

        // Post::create([
        //         'category_id' => 1,
        //         'user_id' => 2,
        //         'title' => 'Judul Keempat',
        //         'slug' => 'judul-ke-empat',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //         'body' => 'sadhjashd'
        //     ]);


    }
}

