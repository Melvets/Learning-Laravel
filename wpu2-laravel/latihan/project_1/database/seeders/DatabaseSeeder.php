<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post_model;
use App\Models\Kategori_model;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Camela Devs',
            'email' => 'camelaputri1@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Muhammad Nazril Ilham',
            'email' => 'ilhamjepara@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Syawal Ananda Syahputra',
            'email' => 'syawal@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Kategori_model::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Kategori_model::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post_model::create([
            'title' => 'Judul Post 1',
            'kategori_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-post-1',
            'excerpt' => '1Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem?',
            'body' => '<p>1Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem? Aliquid provident vel, enim sunt incidunt animi dolore. Facilis, laboriosam deleniti hic, atque eveniet illo adipisci quia voluptate quae rerum tenetur aliquid consectetur enim voluptatum. Provident, cum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, adipisci itaque unde mollitia facere veritatis vel maiores quam similique laborum rem ex debitis ullam vitae odit consequuntur libero earum! Ipsum ut nemo sequi, nam amet quo impedit assumenda quasi praesentium quia temporibus debitis eos earum tempora esse eaque placeat quis!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, explicabo ut assumenda, officiis sequi nihil, et ducimus qui eum quod dolore aliquam distinctio vel ipsum repellat minus esse natus praesentium quas officia fugit tempora in obcaecati. Expedita in facilis unde iusto magni veritatis nesciunt sunt debitis cupiditate nam inventore esse doloribus autem error eum delectus ipsum non, fuga repellendus asperiores nihil adipisci hic optio. Quasi quo dolore in mollitia aut sunt explicabo, beatae molestias veniam quisquam? Tenetur ipsam, voluptatibus commodi rerum quod ratione aperiam doloribus nobis sunt cupiditate. Vitae optio delectus voluptates quae deleniti iusto ipsam voluptas voluptatum in distinctio!</p>'
        ]);

        Post_model::create([
            'title' => 'Judul Post 2',
            'kategori_id' => 1,
            'user_id' => 2,
            'slug' => 'judul-post-2',
            'excerpt' => '2Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem?',
            'body' => '<p>2Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem? Aliquid provident vel, enim sunt incidunt animi dolore. Facilis, laboriosam deleniti hic, atque eveniet illo adipisci quia voluptate quae rerum tenetur aliquid consectetur enim voluptatum. Provident, cum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, adipisci itaque unde mollitia facere veritatis vel maiores quam similique laborum rem ex debitis ullam vitae odit consequuntur libero earum! Ipsum ut nemo sequi, nam amet quo impedit assumenda quasi praesentium quia temporibus debitis eos earum tempora esse eaque placeat quis!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, explicabo ut assumenda, officiis sequi nihil, et ducimus qui eum quod dolore aliquam distinctio vel ipsum repellat minus esse natus praesentium quas officia fugit tempora in obcaecati. Expedita in facilis unde iusto magni veritatis nesciunt sunt debitis cupiditate nam inventore esse doloribus autem error eum delectus ipsum non, fuga repellendus asperiores nihil adipisci hic optio. Quasi quo dolore in mollitia aut sunt explicabo, beatae molestias veniam quisquam? Tenetur ipsam, voluptatibus commodi rerum quod ratione aperiam doloribus nobis sunt cupiditate. Vitae optio delectus voluptates quae deleniti iusto ipsam voluptas voluptatum in distinctio!</p>'
        ]);

        Post_model::create([
            'title' => 'Judul Post 3',
            'kategori_id' => 2,
            'user_id' => 3,
            'slug' => 'judul-post-3',
            'excerpt' => '3Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem?',
            'body' => '<p>3Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem? Aliquid provident vel, enim sunt incidunt animi dolore. Facilis, laboriosam deleniti hic, atque eveniet illo adipisci quia voluptate quae rerum tenetur aliquid consectetur enim voluptatum. Provident, cum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, adipisci itaque unde mollitia facere veritatis vel maiores quam similique laborum rem ex debitis ullam vitae odit consequuntur libero earum! Ipsum ut nemo sequi, nam amet quo impedit assumenda quasi praesentium quia temporibus debitis eos earum tempora esse eaque placeat quis!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, explicabo ut assumenda, officiis sequi nihil, et ducimus qui eum quod dolore aliquam distinctio vel ipsum repellat minus esse natus praesentium quas officia fugit tempora in obcaecati. Expedita in facilis unde iusto magni veritatis nesciunt sunt debitis cupiditate nam inventore esse doloribus autem error eum delectus ipsum non, fuga repellendus asperiores nihil adipisci hic optio. Quasi quo dolore in mollitia aut sunt explicabo, beatae molestias veniam quisquam? Tenetur ipsam, voluptatibus commodi rerum quod ratione aperiam doloribus nobis sunt cupiditate. Vitae optio delectus voluptates quae deleniti iusto ipsam voluptas voluptatum in distinctio!</p>'
        ]);

        Post_model::create([
            'title' => 'Judul Post 4',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-post-4',
            'excerpt' => '4Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem?',
            'body' => '<p>4Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus accusamus nam atque eveniet in, deleniti commodi tenetur quidem iste, reprehenderit possimus excepturi rem? Aliquid provident vel, enim sunt incidunt animi dolore. Facilis, laboriosam deleniti hic, atque eveniet illo adipisci quia voluptate quae rerum tenetur aliquid consectetur enim voluptatum. Provident, cum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, adipisci itaque unde mollitia facere veritatis vel maiores quam similique laborum rem ex debitis ullam vitae odit consequuntur libero earum! Ipsum ut nemo sequi, nam amet quo impedit assumenda quasi praesentium quia temporibus debitis eos earum tempora esse eaque placeat quis!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, explicabo ut assumenda, officiis sequi nihil, et ducimus qui eum quod dolore aliquam distinctio vel ipsum repellat minus esse natus praesentium quas officia fugit tempora in obcaecati. Expedita in facilis unde iusto magni veritatis nesciunt sunt debitis cupiditate nam inventore esse doloribus autem error eum delectus ipsum non, fuga repellendus asperiores nihil adipisci hic optio. Quasi quo dolore in mollitia aut sunt explicabo, beatae molestias veniam quisquam? Tenetur ipsam, voluptatibus commodi rerum quod ratione aperiam doloribus nobis sunt cupiditate. Vitae optio delectus voluptates quae deleniti iusto ipsam voluptas voluptatum in distinctio!</p>'
        ]);
    }
}
