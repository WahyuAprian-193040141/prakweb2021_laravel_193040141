<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        //     'name' => 'Wahyu Aprian',
        //     'email' => 'wahyuaprian490@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Yoga',
        //     'email' => 'yoga@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi? Minus, reiciendis tempora ipsa, culpa quaerat qui, libero praesentium aut incidunt harum porro iure earum amet. Aliquam, quas corrupti labore incidunt amet molestias nam eveniet magnam consectetur suscipit, at similique animi dolorum laboriosam ipsum, reprehenderit perferendis expedita molestiae? Nulla optio deleniti incidunt harum consequatur rerum atque consequuntur minus aperiam? Quidem possimus exercitationem dolores reiciendis commodi praesentium eveniet, quod optio dolorem? A voluptatum cumque magni vitae est esse, fuga mollitia quos itaque et qui dignissimos alias aliquam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi? Minus, reiciendis tempora ipsa, culpa quaerat qui, libero praesentium aut incidunt harum porro iure earum amet. Aliquam, quas corrupti labore incidunt amet molestias nam eveniet magnam consectetur suscipit, at similique animi dolorum laboriosam ipsum, reprehenderit perferendis expedita molestiae? Nulla optio deleniti incidunt harum consequatur rerum atque consequuntur minus aperiam? Quidem possimus exercitationem dolores reiciendis commodi praesentium eveniet, quod optio dolorem? A voluptatum cumque magni vitae est esse, fuga mollitia quos itaque et qui dignissimos alias aliquam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi? Minus, reiciendis tempora ipsa, culpa quaerat qui, libero praesentium aut incidunt harum porro iure earum amet. Aliquam, quas corrupti labore incidunt amet molestias nam eveniet magnam consectetur suscipit, at similique animi dolorum laboriosam ipsum, reprehenderit perferendis expedita molestiae? Nulla optio deleniti incidunt harum consequatur rerum atque consequuntur minus aperiam? Quidem possimus exercitationem dolores reiciendis commodi praesentium eveniet, quod optio dolorem? A voluptatum cumque magni vitae est esse, fuga mollitia quos itaque et qui dignissimos alias aliquam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at recusandae adipisci quibusdam dolores ipsa saepe dolore mollitia tenetur voluptate beatae, sequi dignissimos animi? Minus, reiciendis tempora ipsa, culpa quaerat qui, libero praesentium aut incidunt harum porro iure earum amet. Aliquam, quas corrupti labore incidunt amet molestias nam eveniet magnam consectetur suscipit, at similique animi dolorum laboriosam ipsum, reprehenderit perferendis expedita molestiae? Nulla optio deleniti incidunt harum consequatur rerum atque consequuntur minus aperiam? Quidem possimus exercitationem dolores reiciendis commodi praesentium eveniet, quod optio dolorem? A voluptatum cumque magni vitae est esse, fuga mollitia quos itaque et qui dignissimos alias aliquam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
