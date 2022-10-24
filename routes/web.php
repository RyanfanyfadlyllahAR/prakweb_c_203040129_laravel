<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home', [
    "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Ryan fany fadlyllah AR",
        "email" => "fadlyllahfanny@gmail.com",
        "image" => "fadlyllah.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Ryan fany fadlyllah Ar",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non. Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus. Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a, excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sit repudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta. Rerum animi labore esse consequatur ad, corrupti ducimus praesentium?"
        ],
        [
            "title" => "Judul post kudua",
            "slug"  => "Judul-Post-Kedua",
            "author" => "fadlyllah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non. Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus. Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a, excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sit repudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta. Rerum animi labore esse consequatur ad, corrupti ducimus praesentium?"
        ],
    ];
    return view ('posts', [
        "title" => "Posts",
        "post" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Ryan fany fadlyllah Ar",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non. Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus. Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a, excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sit repudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta. Rerum animi labore esse consequatur ad, corrupti ducimus praesentium?"
        ],
        [
            "title" => "Judul post kudua",
            "slug"  => "Judul-Post-Kedua",
            "author" => "fadlyllah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non. Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus. Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a, excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sit repudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta. Rerum animi labore esse consequatur ad, corrupti ducimus praesentium?"
        ],
    ];

    $new_post =[];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
