@extends('layout')

@section('content')

@include('partials.header-navigation')

@include('partials.default-header')

<div id="app" class="container page-index">

    <h2>Привет!</h2>
    <p>
        Този сайт не е нищо по-различно или иновативно от един стандартен блог.. Уникалното е, че е мой.<br />
        Тук ще драскам на любими за мен теми като планински туризъм, известни и не до такава степен местенца. Горд притежател съм на 88 от 100 печата.. Та почти съм опознал България!<br />
        Някое друго пътуване извън родината.. Какво си заслужава да се види, хапне, направи.<br />
        Неща направили ми впечатление в мрежата.
    </p>

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
