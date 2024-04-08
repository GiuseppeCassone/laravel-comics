<header>
    <nav class="container d-flex">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        <ul class="d-flex align-items-center">
            @foreach($navlinks as $navlink)
            <li>{{ $navlink }}</li>
            @endforeach
        </ul>
    </nav>
</header>