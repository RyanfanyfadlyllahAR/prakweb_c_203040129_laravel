<?php

namespace app\Models;

class Post  {
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Ryan fany fadlyllah Ar",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non. Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus. Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a, excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sit repudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta. Rerum animi labore esse consequatur ad, corrupti ducimus praesentium?"
        ],
        [
            "title" => "Judul post kudua ",
            "slug"  => "Judul-Post-Kedua",
            "author" => "fadlyllah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quae totam magni repellendus error, laborum, ipsam nesciunt sunt omnis facere non. Ut recusandae et qui eos fugit. Ex mollitia id perferendis amet sint vel animi ea porro repellendus. Optio illo praesentium iure aspernatur necessitatibus non recusandae, dolores blanditiis a, excepturi eum modi molestias commodi est. Corporis, commodi quibusdam perspiciatis sit repudiandae necessitatibus voluptatum asperiores nemo nostrum. Unde temporibus quisquam eaque soluta. Rerum animi labore esse consequatur ad, corrupti ducimus praesentium?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
      return $posts->firstWhere('slug',$slug);
  }
}