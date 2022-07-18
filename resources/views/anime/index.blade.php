@extends('layouts.home')

@section('head')
    <title>{{$anime->eng_name}}</title>
@endsection

@section('content')
    <x-header ></x-header>

    <section class="section_two">
        <div class="container">
            <div class="container__item">
                <div class="block__img">
                    <img src="{{asset($anime->image)}}" alt="">
                </div>
                <div class="block__text-anime">
                    <h1 class="anime__title">
                        {{$anime->name}}
                        @if($anime->eng_name != null)
                            /{{$anime->eng_name}}
                        @endif
                        @if($anime->jap_name != null)
                            /{{$anime->jap_name}}
                        @endif
                    </h1>
                    <p class="anime__description">{{$anime->description}}</p>
                </div>
            </div>

            <iframe width="100%" height="500" src="https://www.youtube.com/embed/fwNUqsU7rSw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <div class="comment__container">
                <div class="comment__header">
                    <h1 class="comment__title">Комментарии</h1>
                    <input class="comment__input" type="text" placeholder="Комментарий">
                    <button class="comment__btn" type="submit">Отправить</button>
                </div>
                <div class="comment__item-container">
                    <div class="comment__item">
                        <img class="comment__img" src="../../../img/1619261518_21-phonoteka_org-p-anime-kartinki-bez-fona-29.png">
                        <div class="comment__item-cont">
                            <h1 class="comment__item-title">Пользователь</h1>
                            <p class="comment__item-text">Комментарий</p>
                        </div>
                    </div>

                    <div class="comment__item">
                        <img class="comment__img" src="../../../img/1619261518_21-phonoteka_org-p-anime-kartinki-bez-fona-29.png">
                        <div class="comment__item-cont">
                            <h1 class="comment__item-title">Пользователь</h1>
                            <p class="comment__item-text">Комментарий</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
