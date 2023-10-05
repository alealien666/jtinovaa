<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pitik;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'AleAlien',
            'email' => 'alealien@gmail.com',
            'password' => bcrypt('miku123')
        ]);

        Category::create([
            'name' => 'Manga',
            'slug' => 'manga'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Pitik::create([
            'judul' => 'One Piece',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, asperiores. Cumque id odit voluptatem necessitatibus quae deleniti, incidunt sapiente porro sequi dolorum facere rerum dolor quaerat, molestiae consequatur accusantium distinctio!
            ',
            'slug' => 'one-piece',
            'isi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint veritatis architecto hic accusantium, iste nisi quam animi minima recusandae porro voluptates culpa quo facilis excepturi necessitatibus maiores ullam ea debitis quos molestias! Repellat, architecto qui! Similique veniam repellendus nisi explicabo, unde, praesentium eos deleniti aliquid ex expedita, voluptates rem. Architecto provident corrupti a unde qui expedita neque. Blanditiis provident ab reprehenderit fuga praesentium cum doloremque iusto sed? Assumenda at, impedit totam molestias modi officiis labore minus repellat delectus voluptate quas omnis laudantium vel sequi, ipsam ipsum atque corporis aliquid consequuntur debitis? Ut reprehenderit quibusdam amet tempora ipsam nesciunt, nemo pariatur voluptas ullam esse nam vel optio expedita accusantium asperiores ad maxime ea temporibus dolores. Nesciunt, tempore soluta mollitia iste neque dolores fugit ea veritatis eaque quaerat rem commodi quisquam odit atque, ratione, enim voluptas eum. Possimus odio, numquam eum doloribus hic iusto voluptatibus iure expedita vitae, totam corrupti officiis ullam!',
            'category_id' => '1',
            'user_id' => '1'
        ]);

        Pitik::create([
            'judul' => 'Anak Ngen',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, asperiores. Cumque id odit voluptatem necessitatibus quae deleniti, incidunt sapiente porro sequi dolorum facere rerum dolor quaerat, molestiae consequatur accusantium distinctio!
            ',
            'slug' => 'anak-ngen',
            'isi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint veritatis architecto hic accusantium, iste nisi quam animi minima recusandae porro voluptates culpa quo facilis excepturi necessitatibus maiores ullam ea debitis quos molestias! Repellat, architecto qui! Similique veniam repellendus nisi explicabo, unde, praesentium eos deleniti aliquid ex expedita, voluptates rem. Architecto provident corrupti a unde qui expedita neque. Blanditiis provident ab reprehenderit fuga praesentium cum doloremque iusto sed? Assumenda at, impedit totam molestias modi officiis labore minus repellat delectus voluptate quas omnis laudantium vel sequi, ipsam ipsum atque corporis aliquid consequuntur debitis? Ut reprehenderit quibusdam amet tempora ipsam nesciunt, nemo pariatur voluptas ullam esse nam vel optio expedita accusantium asperiores ad maxime ea temporibus dolores. Nesciunt, tempore soluta mollitia iste neque dolores fugit ea veritatis eaque quaerat rem commodi quisquam odit atque, ratione, enim voluptas eum. Possimus odio, numquam eum doloribus hic iusto voluptatibus iure expedita vitae, totam corrupti officiis ullam!',
            'category_id' => '2',
            'user_id' => '1'
        ]);
    }
}