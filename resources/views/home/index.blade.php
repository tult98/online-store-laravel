@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row bg-red-800">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="https://raw.githubusercontent.com/PracticalBooks/Practical-Laravel/main/Chapter06/onlineStore/public/img/game.png"
                class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="https://github.com/PracticalBooks/Practical-Laravel/blob/main/Chapter06/onlineStore/public/img/safe.png?raw=true"
                class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="https://github.com/PracticalBooks/Practical-Laravel/blob/main/Chapter06/onlineStore/public/img/submarine.png?raw=true"
                class="img-fluid rounded">
        </div>
    </div>
@endsection
