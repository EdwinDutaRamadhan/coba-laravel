@extends('layouts.main')
    @section('container')

        @foreach($posts as $post)
            <article class="mb-5">
                <h2>
                    {{ $post['title'] }}
                </h2>
                <h4>{{ $post['author'] }}</h4>
                <p>{{ $post['body'] }}</p>
            </article>
        @endforeach
    
    @endsection
