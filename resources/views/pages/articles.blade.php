@extends('layout')

@section('content')

@include('partials.default-header')

<div id="app" class="container page-articles">

    <h2>There and back again..</h2>

    <span>Всички статии</span>

    <div class="hr-line">&nbsp;</div>

    <div class="row">
        @foreach ($allArticles as $article)
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

    <p>Драсни ми един ред! Обещавам да отговоря! <a href="{{ url('/contacts') }}">Контактна форма &raquo;</a></p>

    <div class="hr-line">&nbsp;</div>

</div>
@endsection

@section('meta.title'){{ "Всички мои статии - " }}@endsection
@section('meta.desc'){{ "Или както Билбо казва.. There and back again.. - " }}@endsection
@section('og.title'){{ "Всички мои статии. Или както Билбо казва.. There and back again.. Backpack Nerd" }}@endsection
@section('og.url'){{ url()->current() }}@endsection
