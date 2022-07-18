@extends('layouts.home')

@section('content')
    <x-header ></x-header>

    <img class="chica" src="{{asset('img/b838ed9eead6ce4b448bc020883ec881.gif')}}" alt="">

    <section class="section">
        <div class="container">
            <div class="card__menu">
            @foreach($animes as $anime)
                <x-home.anime-card id="{{$anime->id}}" image="{{asset($anime->image)}}" name="{{$anime->name}}"> </x-home.anime-card>
            @endforeach
            </div>
        </div>
    </section>
@endsection
