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
        User::create([
            'name' => 'Ryan fany fadlyllah Ar',
            'email' => 'fadlyllahfanny@gmail.com',
            'password' => bcrypt(12345)
        ]);
        User::create([
            'name' => 'fadlyllah Ar',
            'email' => 'fadlyllah@gmail.com',
            'password' => bcrypt(12345)
        ]);

        Category::create([
            'name'=> 'Web programing',
            'slug'=> 'web-programing'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non.Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus.Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a,excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sitrepudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta.',
            'category_id'=>1,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' =>'judul-Kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non.Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus.Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a,excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sitrepudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta.',
            'category_id'=>1,
            'user_id' =>1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-Ketiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non.Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus.Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a,excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sitrepudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta.',
            'category_id'=>2,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'Judul KeEmpat',
            'slug' => 'judul-Keempat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non.Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus.Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a,excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sitrepudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta.',
            'category_id'=>2,
            'user_id' =>2
        ]);


    }
}
