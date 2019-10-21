@extends('layouts.app')

@section('content')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Category</span>
                    <h3>{{$cat->name}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-white">
        <div class="container">
            <div class="row">
                @foreach($cat->posts as $post)
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="{{url("/post/{$post->id}")}}"><img src="/{{$post->image}}" alt="Image" class="img-fluid rounded"></a>
                        <div class="excerpt">
                            @foreach($post->categories as $cat1)
                            <span class="post-category text-white bg-secondary mb-3">{{$cat1->name}}</span>
                                @endforeach
                            <h2><a href="{{url("/post/{$post->id}")}}">{{$post->title}}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left"><img src="/{{$post->image}}" alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="{{url('/userposts/'.$post->user_id)}}">{{$post->user->name}}</a></span>
                                <span>&nbsp;-&nbsp; {{date('d M, Y',$post->CREATED_AT)}}</span>
                            </div>
                            <p>{{$post->short_text}}</p>
                            <p><a href="{{url("/post/{$post->id}")}}">Read More</a></p>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>
@endsection