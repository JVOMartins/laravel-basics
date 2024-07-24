@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col-lg-8">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-6">
                <div class="card mb-4">
                    <a href="{{ route('post.show', $post->id) }}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$post->created_at}}</div>
                        <h2 class="card-title h4">{{$post->title}}</h2>
                        <p class="card-text">{{$post->text}}</p>
                        <a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">Read more →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled mb-0">
                            @foreach($categories as $category)
                            <li><a href="{{route('home')}}?category_id={{$category->id}}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection