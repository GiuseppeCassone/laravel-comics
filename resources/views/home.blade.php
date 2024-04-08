@extends('layouts/app')

@section('content')

<main>

    <div class="jumbo-wrapper">
        <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="current-series"><h2>CURRENT SERIES</h2></div>

        <div class="comics-container">
            @foreach($comics as $comic)
            <div class="card">
                <img src="{{ $comic['thumb'] }}" :alt="comicTitle">
                <h4>{{ $comic['title'] }}</h4>
            </div>
            @endforeach
        </div>

        <div class="load">LOAD MORE</div>
    </div>
    

</main>

@endsection