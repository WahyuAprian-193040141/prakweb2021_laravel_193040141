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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Wahyu Aprian",
        "email" => "wahyuaprian490@gmail.com",
        "image" => "wahyu.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wahyu Aprian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt consequatur autem, eum minus soluta aperiam vitae, iure corrupti totam impedit exercitationem asperiores mollitia. Explicabo, dolorum magnam necessitatibus, eligendi quasi impedit dolorem architecto harum nemo quae nisi reprehenderit, rem voluptates. Repudiandae nostrum nobis similique, aut omnis assumenda ad earum molestiae quam placeat pariatur ex quasi officia voluptates, nulla laboriosam commodi accusamus maiores perferendis id enim at quia eaque optio! Ab excepturi ducimus ut molestiae maiores? Minima blanditiis quasi repellendus nostrum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yoga",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quae repellat sit tenetur, voluptates recusandae, reprehenderit ipsam iste aut quibusdam quod dolorem veritatis cupiditate consequatur excepturi atque voluptas! Eveniet, quod ipsum placeat molestias aspernatur molestiae dolores, temporibus et rerum ullam dolorem praesentium repudiandae accusantium, animi id pariatur? Voluptatibus, molestias ipsa eos accusamus nesciunt architecto placeat perferendis, corporis atque perspiciatis quas, voluptates reiciendis. Molestias voluptatibus, eligendi enim fugiat, labore aperiam ea voluptates earum itaque exercitationem alias? Ducimus maiores autem aliquid? Molestiae numquam fugiat aliquam cumque excepturi voluptate suscipit illo placeat beatae minus animi expedita ullam, exercitationem ipsa qui deserunt necessitatibus unde."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman sigle post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wahyu Aprian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt consequatur autem, eum minus soluta aperiam vitae, iure corrupti totam impedit exercitationem asperiores mollitia. Explicabo, dolorum magnam necessitatibus, eligendi quasi impedit dolorem architecto harum nemo quae nisi reprehenderit, rem voluptates. Repudiandae nostrum nobis similique, aut omnis assumenda ad earum molestiae quam placeat pariatur ex quasi officia voluptates, nulla laboriosam commodi accusamus maiores perferendis id enim at quia eaque optio! Ab excepturi ducimus ut molestiae maiores? Minima blanditiis quasi repellendus nostrum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yoga",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quae repellat sit tenetur, voluptates recusandae, reprehenderit ipsam iste aut quibusdam quod dolorem veritatis cupiditate consequatur excepturi atque voluptas! Eveniet, quod ipsum placeat molestias aspernatur molestiae dolores, temporibus et rerum ullam dolorem praesentium repudiandae accusantium, animi id pariatur? Voluptatibus, molestias ipsa eos accusamus nesciunt architecto placeat perferendis, corporis atque perspiciatis quas, voluptates reiciendis. Molestias voluptatibus, eligendi enim fugiat, labore aperiam ea voluptates earum itaque exercitationem alias? Ducimus maiores autem aliquid? Molestiae numquam fugiat aliquam cumque excepturi voluptate suscipit illo placeat beatae minus animi expedita ullam, exercitationem ipsa qui deserunt necessitatibus unde."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
