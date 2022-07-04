@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="Gekkode">
@endsection

@section('title')
    <title>{{$post['title']}} - {{setting('site.title')}}</title>
@endsection

@section('content')
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$post['title']}}</h1>

            <!-- Author -->
            <p class="lead">
                par
                {{$post->user['name']}}
            </p>
            <hr>

            <!-- Date/Time -->
            <p>Posté le {{$post->created_at->format('d/m/Y')}}</p>
            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{Illuminate\Support\Facades\Storage::url($post->featured_image)}}" alt="">
            <hr>

            <!-- Post Content -->
            {!! $post->content !!}
            <hr>

            <!-- Articles similaire -->
            <h3>Articles similaires</h3>

            <div class="row">
                @foreach($related_posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{Illuminate\Support\Facades\Storage::url($post['featured_image'])}}">
                            <div class="card-body">
                                <p class="card-text">{{Illuminate\Support\Str::limit(strip_tags($post['content']), 100, '...')}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="http://localhost:8000/post/{{$post['slug']}}" class="btn btn-sm btn-outline-secondary">En savoir →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        @include('_partials.sidebar')

    </div>
@endsection