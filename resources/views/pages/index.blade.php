@extends('layout')

@section('content')

@include('partials.header-navigation')

@include('partials.default-header')

<div id="app" class="container page-index">

    <h2>Привет!</h2>
    <p>
        Аз съм Backpack Nerd.<br />
        Нямам претенциите за професионален фотограф или добър писател, но това не ми пречи да правя и двете (:<br />
        Сайтът, който гледаш не е нищо по-различно или иновативно от един стандартен блог.. Уникалното е, че е мой.<br />
        Тук ще драскам на любими за мен теми като планински туризъм, известни и не до такава степен дестинации.<br />
        Горд притежател съм на 100 печата и златна значка от националното движение "Опознай България".
    </p>

    <div class="row">
        <div class="col-md-8">
            <img src="images/badges.jpg" title="Backpack Nerd" alt="Backpack Nerd" class="img-responsive project-thumb" />
        </div>
    </div>

    <a class="btn btn-fb" href="https://www.facebook.com/backpacknerd" target="_blank">
        <i class="fa fa-facebook-official" aria-hidden="true"></i> Следи ме във Facebook &raquo;
    </a>

    <a class="btn btn-fb" href="https://www.instagram.com/backpack.nerd" target="_blank">
        <i class="fa fa-instagram" aria-hidden="true"></i> Следи ме в Instagram &raquo;
    </a>

    <div class="hr-line">&nbsp;</div>

    <h3>Избрани статии</h3>

    <p>Разгледай <a href="{{ url('/articles') }}">всички статии &raquo;</a>

    <div class="row">
         @foreach ($favouriteArticles as $article)
            <div class="col-sm-4">
                <a href="{{ url('article/'.$article->id) }}">
                    <div class="project-thumb">
                        <img src="{{ $article->image_thumb }}" class="img-responsive" title="Backpack Nerd - {{ $article->title }}" title="Backpack Nerd - {{ $article->title }}" />
                        <p>{{ $article->title }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <p>Разгледай <a href="{{ url('/articles') }}">всички статии &raquo;</a>

    <div class="hr-line">&nbsp;</div>

    <h3>Контакти</h3>

    <p>Драсни ми един ред! Обещавам да отговоря! <a href="{{ url('/contacts') }}">Контактна форма &raquo;</a></p>

    <div class="hr-line">&nbsp;</div>

</div>
@endsection
