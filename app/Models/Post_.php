<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        ['title' => 'Judul Post Pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'Dimas Maulana Putra',
        'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, voluptatibus tenetur. Voluptate illum cum quam dolorem, aperiam officiis rerum repellendus minus optio quae accusamus sequi non quis, consequatur fugit voluptas magni corrupti aspernatur tempore vitae totam culpa? Itaque accusamus deleniti delectus amet laborum blanditiis aliquam facere eveniet vitae, labore cupiditate hic suscipit ea dignissimos voluptate. Nemo quos sit blanditiis aspernatur nobis amet quam voluptas possimus rem error inventore aperiam, excepturi consequuntur ducimus, saepe pariatur. Consectetur nam impedit reprehenderit cumque tempore?'
    ],
    ['title' => 'Judul Post Kedua',
    'slug' => 'judul-post-kedua',
        'author' => 'Rahmat Rizky',
        'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident itaque fugiat dicta quos molestias consequuntur cupiditate beatae ab cumque in deserunt, sint, vero cum corporis iusto praesentium rerum saepe architecto dolores atque. Repudiandae assumenda deserunt facilis officiis tempore impedit omnis voluptatibus dolores at? Blanditiis quas, laudantium porro tempora ex sunt adipisci ipsa hic laborum, illum eum consequuntur placeat ratione, ipsam pariatur delectus ducimus iste sed qui? Iure veniam, ex, nihil, molestiae exercitationem dignissimos nam magni facere inventore officiis ipsa hic corporis laboriosam. Perferendis praesentium vel quas quasi cumque quidem quo accusantium. Reiciendis vitae sunt repellat minima praesentium unde dolorem numquam.'
    ]
    
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

    //     $post = [];
    // foreach($posts as $p) {
        
    //     if($p['slug']=== $slug) {
    //         $post = $p;
    //     }
    // }
        return $posts->firstWhere('slug',$slug);
    }
}

    Post::Create([
        'title' =>'Judul Ke Tiga',
        'category_id' => 3,
        'slug' => 'judul-ke-tiga',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, perferendis',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tempore doloremque earum saepe deleniti fuga culpa nihil exercitationem quo quod sed aperiam eveniet incidunt est ullam cupiditate deserunt odit sit,</p> <p>quos ex, perspiciatis magnam at expedita tenetur! Quo vel, quam iste in veniam repellendus rem sit possimus accusantium perspiciatis. Itaque excepturi laudantium voluptatibus hic a minima veritatis fugit veniam? Et iusto vero soluta animi eos autem quidem.</p>  <p>Eos ipsa, aliquam, molestiae assumenda blanditiis rem similique error, adipisci suscipit dolor facilis amet porro voluptatibus eligendi nulla aliquid magnam nam ut? Unde architecto et dolor voluptatum repellendus fugiat accusantium nesciunt, quibusdam mollitia, debitis dicta nisi, autem molestias harum eligendi dolore consequuntur alias quo non?</p> <p>Aspernatur natus cumque dolores ea possimus at dolore, voluptas nemo illo, eveniet sed animi eos, minus sapiente. Nobis, nihil odio velit doloremque cupiditate eveniet, error porro tempora magnam ut corrupti atque saepe dolor quaerat debitis soluta eius. Commodi?</p>' 
    ])

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eius culpa voluptatibus a, possimus voluptate necessitatibus eveniet dolore nesciunt ipsa voluptatum assumenda totam odio quia obcaecati animi nam debitis nostrum dolor quas. Consectetur cum sunt quisquam nisi aut nam ex vero rerum repellat, voluptatem deserunt optio corporis inventore doloremque natus laboriosam iusto, adipisci veniam? Nulla quasi sequi ipsum vero iure tenetur, sit fugiat laboriosam commodi? Quisquam ipsa, libero eveniet laudantium culpa deleniti natus similique ipsam cumque laboriosam debitis quaerat aliquam itaque quae molestias eos corrupti fuga error, nam voluptates rem. Odio consequatur quo similique? Nulla dolorum modi quaerat qui officiis.