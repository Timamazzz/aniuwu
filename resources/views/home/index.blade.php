@extends('layouts.home')

@section('content')
    <x-header ></x-header>

    <img class="chica" src="{{asset('img/b838ed9eead6ce4b448bc020883ec881.gif')}}" alt="">

    <section class="section">
        <div class="container">
            @foreach($animes as $anime)
                <x-home.anime-card link="#" img="{{asset($anime->image)}}" animeName="{{$anime->name}}"> </x-home.anime-card>
            @endforeach
        </div>
    </section>
@endsection
