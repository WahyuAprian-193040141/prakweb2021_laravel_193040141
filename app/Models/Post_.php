<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wahyu Aprian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt consequatur autem, eum minus soluta aperiam vitae, iure corrupti totam impedit exercitationem asperiores mollitia. Explicabo, dolorum magnam necessitatibus, eligendi quasi impedit dolorem architecto harum nemo quae nisi reprehenderit, rem voluptates. Repudiandae nostrum nobis similique, aut omnis assumenda ad earum molestiae quam placeat pariatur ex quasi officia voluptates, nulla laboriosam commodi accusamus maiores perferendis id enim at quia eaque optio! Ab excepturi ducimus ut molestiae maiores? Minima blanditiis quasi repellendus nostrum?"
        ],
        [
            "title" => "Judul Post Yoga",
            "slug" => "judul-post-kedua",
            "author" => "Yoga",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quae repellat sit tenetur, voluptates recusandae, reprehenderit ipsam iste aut quibusdam quod dolorem veritatis cupiditate consequatur excepturi atque voluptas! Eveniet, quod ipsum placeat molestias aspernatur molestiae dolores, temporibus et rerum ullam dolorem praesentium repudiandae accusantium, animi id pariatur? Voluptatibus, molestias ipsa eos accusamus nesciunt architecto placeat perferendis, corporis atque perspiciatis quas, voluptates reiciendis. Molestias voluptatibus, eligendi enim fugiat, labore aperiam ea voluptates earum itaque exercitationem alias? Ducimus maiores autem aliquid? Molestiae numquam fugiat aliquam cumque excepturi voluptate suscipit illo placeat beatae minus animi expedita ullam, exercitationem ipsa qui deserunt necessitatibus unde."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
