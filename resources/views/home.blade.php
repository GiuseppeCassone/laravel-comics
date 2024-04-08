@extends('layouts/app')

@section('content')

<main>

    <div class="jumbo-wrapper">
        <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="current-series"><h2 class="mb-0">CURRENT SERIES</h2></div>

        <div class="comics-container">
            @foreach($comics as $comic)
            <div class="card border-0">
                <img src="{{ $comic['thumb'] }}" :alt="comicTitle">
                <h4 class="text-white">{{ $comic['series'] }}</h4>
            </div>
            @endforeach
        </div>

        <div class="load">LOAD MORE</div>
    </div>
    <section class="merchandise">
        <div class="container">
            @foreach($items as $item)
            <div class="icon-links">
                <img src="{{ Vite::asset('resources/img/' . $item['image']) }}" alt="">
                <span class="text-white">{{ $item['link'] }}</span>
            </div>
            @endforeach
        </div>
    </section>
    

</main>

@endsection