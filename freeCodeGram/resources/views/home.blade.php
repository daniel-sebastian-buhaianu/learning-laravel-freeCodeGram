@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="images/freeCodeCamp.jpg" style="height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex">
                <h3 class="pe-2 mb-0">freecodecamp</h3>
                <button type="button" class="btn btn-primary"><b>Follow</b></button>
            </div>
            <div class="d-flex mt-2">
                <span class="pe-4"><b>212</b> following</span>
                <span class="pe-4"><b>153</b> posts</span>
                <span class="pe-4"><b>23k</b> followers</span>
            </div>
            <div class="pt-4">
                <p class="m-0"><b>freeCodeCamp.org</b></p>
                <p class="m-0">We're a global community of millions of people learning to code together.</p>
                <p class="m-0">LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</p>
                <p class="m-0"><a href="https://www.freecodecamp.org"><b>www.freecodecamp.org</b></a></p>
            </div>
        </div>
    </div>
</div>
@endsection
