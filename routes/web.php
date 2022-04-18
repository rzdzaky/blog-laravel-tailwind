<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Dzaki Rozaan",
        "email" => "dzakirz@gmail.com",
        "gambar" => "dzaki.png",
    ]);
});



Route::get('blog', function () {

    $blogPosts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Dzaki Rozaan",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, necessitatibus adipisci voluptatibus illum, dolores, quas tempore delectus officiis nisi est magnam beatae tempora! Quo voluptatum distinctio dolore, mollitia dignissimos porro consequuntur suscipit ipsum magni exercitationem, sunt vel quae temporibus. Sit amet doloremque est quae aliquam saepe fugit illo maiores ex cumque ipsa temporibus nulla accusantium quaerat iusto dolores recusandae delectus dolore illum, ipsam animi consectetur vero? Commodi doloribus nam nisi sint maxime unde."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Nandita Winasti",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ipsam a vero voluptatem quasi odit fugit maxime quod vitae illum repellat, corrupti dolore harum deleniti. Corporis, expedita velit doloribus optio praesentium consectetur facere iusto fugiat nesciunt voluptatem illo similique cum temporibus qui deserunt? Distinctio porro vel debitis aut sit aperiam voluptatibus earum fugiat. Possimus unde eos quidem facere. Repellat exercitationem iusto veritatis dolore voluptate voluptates porro? Perferendis repellendus velit dolorem. Quisquam minus facere, commodi impedit et itaque ipsum distinctio illo blanditiis placeat quasi dolorum laudantium."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blogPosts
    ]);
});

Route::get('posts/{slug}', function($slug){
    $blogPosts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Dzaki Rozaan",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, necessitatibus adipisci voluptatibus illum, dolores, quas tempore delectus officiis nisi est magnam beatae tempora! Quo voluptatum distinctio dolore, mollitia dignissimos porro consequuntur suscipit ipsum magni exercitationem, sunt vel quae temporibus. Sit amet doloremque est quae aliquam saepe fugit illo maiores ex cumque ipsa temporibus nulla accusantium quaerat iusto dolores recusandae delectus dolore illum, ipsam animi consectetur vero? Commodi doloribus nam nisi sint maxime unde, ab veniam vero inventore magni ipsa quam tempore ad dolores excepturi odit dignissimos consectetur. Vitae numquam omnis quae veniam cupiditate inventore impedit qui, sed, nesciunt ratione obcaecati neque sunt laboriosam ullam? Voluptate esse placeat officiis, iste enim id repellat sunt modi facere laborum? Aperiam, similique in nostrum inventore tempora adipisci! Quis error vel sed nostrum."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Nandita Winasti",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ipsam a vero voluptatem quasi odit fugit maxime quod vitae illum repellat, corrupti dolore harum deleniti. Corporis, expedita velit doloribus optio praesentium consectetur facere iusto fugiat nesciunt voluptatem illo similique cum temporibus qui deserunt? Distinctio porro vel debitis aut sit aperiam voluptatibus earum fugiat. Possimus unde eos quidem facere. Repellat exercitationem iusto veritatis dolore voluptate voluptates porro? Perferendis repellendus velit dolorem. Quisquam minus facere, commodi impedit et itaque ipsum distinctio illo blanditiis placeat quasi dolorum laudantium, exercitationem possimus soluta! Culpa laborum et iusto delectus praesentium molestias sed, accusantium iure possimus asperiores laboriosam quos maiores voluptates officia dignissimos impedit accusamus incidunt ab quo deserunt sit. Quia sequi quidem voluptas saepe dolores recusandae dolorum esse dolore! Quisquam unde autem ullam ducimus recusandae laborum necessitatibus, omnis cum, ad magnam amet sit ab enim aspernatur eius delectus voluptatem nulla? Libero placeat perspiciatis hic, possimus ex ducimus expedita eveniet tempora iure quos illo iste, rem odit, dicta laudantium a impedit numquam dolorum modi nesciunt ut commodi quaerat quidem. Obcaecati, delectus at."
        ]
    ];

    $newPost= [];
    foreach($blogPosts as $post){
        if($post["slug"]===$slug){
            $newPost = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $newPost
    ]);
});
