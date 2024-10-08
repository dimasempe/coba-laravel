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
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Dimas Maulana Putra',
            'username' => 'dimasempe',
            'email'=> 'dimas.maulanaputra13@gmail.com',
            'password'=>bcrypt('dimasblog')
        ]);

        // User::create([
        //     'name' => 'Rahmat Rizky',
        //     'email'=> 'rahmatrizky@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, perferendis',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempore doloremque earum saepe deleniti fuga culpa nihil exercitationem quo quod sed aperiam eveniet incidunt est ullam cupiditate deserunt odit sit,</p> <p>quos ex, perspiciatis magnam at expedita tenetur! Quo vel, quam iste in veniam repellendus rem sit possimus accusantium perspiciatis. Itaque excepturi laudantium voluptatibus hic a minima veritatis fugit veniam? Et iusto vero soluta animi eos autem quidem.</p>  <p>Eos ipsa, aliquam, molestiae assumenda blanditiis rem similique error, adipisci suscipit dolor facilis amet porro voluptatibus eligendi nulla aliquid magnam nam ut? Unde architecto et dolor voluptatum repellendus fugiat accusantium nesciunt, quibusdam mollitia, debitis dicta nisi, autem molestias harum eligendi dolore consequuntur alias quo non?</p> <p>Aspernatur natus cumque dolores ea possimus at dolore, voluptas nemo illo, eveniet sed animi eos, minus sapiente. Nobis, nihil odio velit doloremque cupiditate eveniet, error porro tempora magnam ut corrupti atque saepe dolor quaerat debitis soluta eius. Commodi?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-ke-dua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, perferendis',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempore doloremque earum saepe deleniti fuga culpa nihil exercitationem quo quod sed aperiam eveniet incidunt est ullam cupiditate deserunt odit sit,</p> <p>quos ex, perspiciatis magnam at expedita tenetur! Quo vel, quam iste in veniam repellendus rem sit possimus accusantium perspiciatis. Itaque excepturi laudantium voluptatibus hic a minima veritatis fugit veniam? Et iusto vero soluta animi eos autem quidem.</p>  <p>Eos ipsa, aliquam, molestiae assumenda blanditiis rem similique error, adipisci suscipit dolor facilis amet porro voluptatibus eligendi nulla aliquid magnam nam ut? Unde architecto et dolor voluptatum repellendus fugiat accusantium nesciunt, quibusdam mollitia, debitis dicta nisi, autem molestias harum eligendi dolore consequuntur alias quo non?</p> <p>Aspernatur natus cumque dolores ea possimus at dolore, voluptas nemo illo, eveniet sed animi eos, minus sapiente. Nobis, nihil odio velit doloremque cupiditate eveniet, error porro tempora magnam ut corrupti atque saepe dolor quaerat debitis soluta eius. Commodi?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ke-tiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, perferendis',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempore doloremque earum saepe deleniti fuga culpa nihil exercitationem quo quod sed aperiam eveniet incidunt est ullam cupiditate deserunt odit sit,</p> <p>quos ex, perspiciatis magnam at expedita tenetur! Quo vel, quam iste in veniam repellendus rem sit possimus accusantium perspiciatis. Itaque excepturi laudantium voluptatibus hic a minima veritatis fugit veniam? Et iusto vero soluta animi eos autem quidem.</p>  <p>Eos ipsa, aliquam, molestiae assumenda blanditiis rem similique error, adipisci suscipit dolor facilis amet porro voluptatibus eligendi nulla aliquid magnam nam ut? Unde architecto et dolor voluptatum repellendus fugiat accusantium nesciunt, quibusdam mollitia, debitis dicta nisi, autem molestias harum eligendi dolore consequuntur alias quo non?</p> <p>Aspernatur natus cumque dolores ea possimus at dolore, voluptas nemo illo, eveniet sed animi eos, minus sapiente. Nobis, nihil odio velit doloremque cupiditate eveniet, error porro tempora magnam ut corrupti atque saepe dolor quaerat debitis soluta eius. Commodi?</p>',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-ke-empat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, perferendis',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempore doloremque earum saepe deleniti fuga culpa nihil exercitationem quo quod sed aperiam eveniet incidunt est ullam cupiditate deserunt odit sit,</p> <p>quos ex, perspiciatis magnam at expedita tenetur! Quo vel, quam iste in veniam repellendus rem sit possimus accusantium perspiciatis. Itaque excepturi laudantium voluptatibus hic a minima veritatis fugit veniam? Et iusto vero soluta animi eos autem quidem.</p>  <p>Eos ipsa, aliquam, molestiae assumenda blanditiis rem similique error, adipisci suscipit dolor facilis amet porro voluptatibus eligendi nulla aliquid magnam nam ut? Unde architecto et dolor voluptatum repellendus fugiat accusantium nesciunt, quibusdam mollitia, debitis dicta nisi, autem molestias harum eligendi dolore consequuntur alias quo non?</p> <p>Aspernatur natus cumque dolores ea possimus at dolore, voluptas nemo illo, eveniet sed animi eos, minus sapiente. Nobis, nihil odio velit doloremque cupiditate eveniet, error porro tempora magnam ut corrupti atque saepe dolor quaerat debitis soluta eius. Commodi?</p>',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
        
        User::factory(5)->create();
        
        Post::factory(30)->create();
    }
}
