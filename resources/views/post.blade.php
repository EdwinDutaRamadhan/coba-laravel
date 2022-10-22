@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>

    <p>By. Edwin Duta Ramadhan in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog">back to post</a>
@endsection

{{-- Post::create([
    'title' => 'Judul Keempat',
    'category_id' => '4',
    'slug' => 'judul-Keempat',
    'excerpt' => 'Lorem ipsum Keempat',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit maxime assumenda sequi nulla impedit, doloribus dolore voluptatem autem odio quibusdam eaque libero ut neque, asperiores placeat harum necessitatibus. Autem accusamus quae possimus optio exercitationem odit, laudantium molestias perferendis iste corrupti.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, ipsa asperiores? Iure eaque necessitatibus eum, ducimus excepturi culpa! Veniam dolorem, quibusdam necessitatibus eos fuga deserunt maxime consequuntur debitis dolore rem sunt, itaque, tempora earum neque voluptatem vel aut. Molestiae, expedita. Possimus veniam repellat vero autem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque officia recusandae aperiam esse voluptate ad, fugit totam dignissimos ea quam nulla facere accusantium praesentium nisi. Cupiditate totam tempora accusamus molestias nemo, asperiores ex sapiente? Quod tempore ex repellendus odit corrupti commodi praesentium maiores impedit voluptate in possimus deleniti eveniet facilis ullam quam voluptatum, aut enim nostrum earum? Repellat incidunt, possimus voluptate beatae aut dicta fugit nostrum odio totam temporibus dolores sint ipsam, doloribus at rerum eaque recusandae porro cumque! Cum corrupti maiores dolor reiciendis numquam aspernatur tenetur velit vitae officiis.</p>'
]); --}}