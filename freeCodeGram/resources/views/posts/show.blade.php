@extends('layouts.app')

@section('content')
<div class="container">
   <img src="{{ asset('/storage/'.$post->image) }}">
   <p>{{ $post->caption }}</p>
</div>
@endsection
