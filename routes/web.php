<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
Route::get('/posts', function () {
    $blog_post = [
        [
            "title" => "Judul Post  Pertama",
            "author" => "Edwin",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste labore repudiandae fugit maiores consequuntur fuga vitae. Consequuntur laborum, natus error vel nihil dignissimos non ducimus amet eligendi inventore blanditiis sed veniam voluptates nesciunt deserunt rerum doloribus quasi aut et est fugit. Dolorem expedita, possimus saepe praesentium exercitationem est nesciunt soluta minima facere repellat vel autem officia corporis fuga pariatur, hic veniam fugiat adipisci facilis quaerat vero. Non cum officia voluptatibus exercitationem a laudantium, dolore veritatis quia eum velit sapiente praesentium!"
        ],
        [
            "title" => "Judul Post  Kedua",
            "author" => "Sarip",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste labore repudiandae fugit maiores consequuntur fuga vitae. Consequuntur laborum, natus error vel nihil dignissimos non ducimus amet eligendi inventore blanditiis sed veniam voluptates nesciunt deserunt rerum doloribus quasi aut et est fugit. Dolorem expedita, possimus saepe praesentium exercitationem est nesciunt soluta minima facere repellat vel autem officia corporis fuga pariatur, hic veniam fugiat adipisci facilis quaerat vero. Non cum officia voluptatibus exercitationem a laudantium, dolore veritatis quia eum velit sapiente praesentium!"
        ], 
        ];
    return view('posts', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});



Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Edwin Duta Ramadhan",
        "email" => "edwinduta@gmail.com"
    ]);
});

