<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Camela Devs',
        //     'email' => 'camelaputri1@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Arvan Dendys',
        //     'email' => 'vanden@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        // User::factory(3)->create();
        Post::factory(5)->create();

        // Category::create([
        //     'nama' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'nama' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Pertama Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, solut',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corporis amet ad asperiores vero, enim fugiat architecto dolor ex? Nihil eaque omnis ad voluptatem provident rem necessitatibus dolorum quos, sint iure sequi magnam illum, eos, fugiat earum. Necessitatibus, cupiditate ea rem sunt atque dolorem eum.</p><p>Distinctio possimus placeat deserunt, ipsa adipisci quas accusamus itaque veniam voluptatem eligendi soluta aliquam delectus repudiandae, consequatur blanditiis vel excepturi quidem nemo. Similique modi quas unde iusto corporis? Dicta velit ex odit suscipit ipsum est facilis eligendi unde! Omnis asperiores, quisquam iure quos adipisci corrupti pariatur eos hic quasi atque ducimus voluptatibus ullam dolorum neque dolor laborum quibusdam possimus et excepturi. Saepe dolor quasi hic illo explicabo a voluptas neque nostrum repellat consectetur? Voluptas nisi culpa, molestias voluptate tempore consequatur explicabo quo autem, nobis itaque voluptates harum recusandae odio mollitia unde perspiciatis dolore amet deleniti aperiam, praesentium corporis et.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Kedua Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, solut',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corporis amet ad asperiores vero, enim fugiat architecto dolor ex? Nihil eaque omnis ad voluptatem provident rem necessitatibus dolorum quos, sint iure sequi magnam illum, eos, fugiat earum. Necessitatibus, cupiditate ea rem sunt atque dolorem eum.</p><p>Distinctio possimus placeat deserunt, ipsa adipisci quas accusamus itaque veniam voluptatem eligendi soluta aliquam delectus repudiandae, consequatur blanditiis vel excepturi quidem nemo. Similique modi quas unde iusto corporis? Dicta velit ex odit suscipit ipsum est facilis eligendi unde! Omnis asperiores, quisquam iure quos adipisci corrupti pariatur eos hic quasi atque ducimus voluptatibus ullam dolorum neque dolor laborum quibusdam possimus et excepturi. Saepe dolor quasi hic illo explicabo a voluptas neque nostrum repellat consectetur? Voluptas nisi culpa, molestias voluptate tempore consequatur explicabo quo autem, nobis itaque voluptates harum recusandae odio mollitia unde perspiciatis dolore amet deleniti aperiam, praesentium corporis et.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);      
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Ketiga Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, solut',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corporis amet ad asperiores vero, enim fugiat architecto dolor ex? Nihil eaque omnis ad voluptatem provident rem necessitatibus dolorum quos, sint iure sequi magnam illum, eos, fugiat earum. Necessitatibus, cupiditate ea rem sunt atque dolorem eum.</p><p>Distinctio possimus placeat deserunt, ipsa adipisci quas accusamus itaque veniam voluptatem eligendi soluta aliquam delectus repudiandae, consequatur blanditiis vel excepturi quidem nemo. Similique modi quas unde iusto corporis? Dicta velit ex odit suscipit ipsum est facilis eligendi unde! Omnis asperiores, quisquam iure quos adipisci corrupti pariatur eos hic quasi atque ducimus voluptatibus ullam dolorum neque dolor laborum quibusdam possimus et excepturi. Saepe dolor quasi hic illo explicabo a voluptas neque nostrum repellat consectetur? Voluptas nisi culpa, molestias voluptate tempore consequatur explicabo quo autem, nobis itaque voluptates harum recusandae odio mollitia unde perspiciatis dolore amet deleniti aperiam, praesentium corporis et.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Ketiga Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, solut',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corporis amet ad asperiores vero, enim fugiat architecto dolor ex? Nihil eaque omnis ad voluptatem provident rem necessitatibus dolorum quos, sint iure sequi magnam illum, eos, fugiat earum. Necessitatibus, cupiditate ea rem sunt atque dolorem eum.</p><p>Distinctio possimus placeat deserunt, ipsa adipisci quas accusamus itaque veniam voluptatem eligendi soluta aliquam delectus repudiandae, consequatur blanditiis vel excepturi quidem nemo. Similique modi quas unde iusto corporis? Dicta velit ex odit suscipit ipsum est facilis eligendi unde! Omnis asperiores, quisquam iure quos adipisci corrupti pariatur eos hic quasi atque ducimus voluptatibus ullam dolorum neque dolor laborum quibusdam possimus et excepturi. Saepe dolor quasi hic illo explicabo a voluptas neque nostrum repellat consectetur? Voluptas nisi culpa, molestias voluptate tempore consequatur explicabo quo autem, nobis itaque voluptates harum recusandae odio mollitia unde perspiciatis dolore amet deleniti aperiam, praesentium corporis et.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
