@extends('layout.layout')

@section('content')
<div style="display: flex">
    
    <x-app-sidebar></x-app-sidebar>

    <div class="container mt-5 mb-5">
        <div class="row" style="justify-content: center;">
            
            @if ($posts)
                @foreach($posts as $post)
                <div class="card col-3 m-3">
                    <a href="{{ route('post.list') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </div>
                        <img src="{{ env('APP_URL') }}/img/img.jpg" class="card-img-top card-img-bottom" alt="{{ $post->title }}" style="height: 160px; width: 100%; margin-bottom: 10px; margin-top: 10px;">
                    </a>    
                </div>
                @endforeach
            @endif
            
        </div>
    </div>

</div>
@endsection