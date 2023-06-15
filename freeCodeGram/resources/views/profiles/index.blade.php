@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ asset('images/freeCodeCamp.jpg') }}" style="height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h3 class="pe-2 mb-0">{{ $user->username }}</h3>
                <a href="{{ URL::to('/p/create') }}">Add New Post</a>
            </div>
            <div class="d-flex mt-2">
                <span class="pe-4"><b>212</b> following</span>
                <span class="pe-4"><b>{{ $user->posts->count() }}</b> posts</span>
                <span class="pe-4"><b>23k</b> followers</span>
            </div>
            <div class="pt-4">
                <p class="m-0"><b>{{ $user->profile->title }}</b></p>
                <p class="m-0">{{ $user->profile->description }}</p>
                <p class="m-0"><a href="{{ $user->profile->url ?? '#' }}"><b>{{ $user->profile->url ?? 'https://www.url-is-null.com' }}</b></a></p>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="{{ asset('/storage/'.$post->image) }}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
