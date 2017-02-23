@extends('layout')

@section('content')

<div id="header-sub" class="container-fluid">
    <img src="{{ url($article->image_header) }}" class="img-responsive" title="Backpack Nerd - {{ $article->title }}" alt="Backpack Nerd - {{ $article->title }}" />
</div>

<div id="app" class="container page-article">

    <h2>{{ $article->title }}</h2>

    <div class="hr-line">&nbsp;</div>

    <p>{!! nl2br($article->body) !!}</p>

    <div class="hr-line">&nbsp;</div>

    @if ($article->youtube)
        <div class="well">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $article->youtube }}"></iframe>
            </div>
        </div>
        <div class="hr-line">&nbsp;</div>
    @endif

    <div class="hr-line">&nbsp;</div>

    <div class="row">
        @foreach ($article->photos as $photo)
            <div class="col-sm-4">
                <a href="{{ url($photo->image) }}" class="fancybox-images" title="Backpack Nerd // {{ $photo->title }}" rel="articleImages">
                    <div class="project-thumb">
                        <img src="{{ url($photo->image_thumb) }}" class="img-responsive" title="Backpack Nerd - {{ $article->title }}" alt="Backpack Nerd - {{ $article->title }}" />
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <button id="shareOnFacebook" class="btn btn-fb"><i class="fa fa-facebook-official" aria-hidden="true"></i> Споделете във Facebook &raquo;</button>

    <p>Пиши ми през <a href="{{ url('/contacts') }}">контактната форма &raquo;</a> ако имате въпроси или искате да обсъдим нещо по темата..</p>

    <p>Обратно към <a href="{{ url('/articles') }}">всички статии &raquo;</a></p>

    <div class="hr-line">&nbsp;</div>

    <h3>Други статии</h3>

    <div class="row">
        @foreach ($otherArticles as $otherArticle)
            <div class="col-sm-4">
                <a href="{{ url('article/' . $otherArticle->id) }}">
                    <div class="project-thumb">
                        <img src="{{ url($otherArticle->image_thumb) }}" class="img-responsive" title="Backpack Nerd - {{ $otherArticle->title }}" alt="Backpack Nerd - {{ $otherArticle->title }}" />
                        <p>{{ $otherArticle->title }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <p>Обратно към <a href="{{ url('/articles') }}">всички статии &raquo;</a></p>

    <div class="hr-line">&nbsp;</div>
</div>
@endsection

@section('meta.title'){{ "$article->title - " }}@endsection
@section('meta.desc'){{ "$article->description - " }}@endsection
@section('og.title'){{ "$article->title - Backpack Nerd" }}@endsection
@section('og.desc'){{ $article->description }}@endsection
@section('og.image'){{ url($article->image_thumb) }}@endsection
@section('og.url'){{ url()->current() }}@endsection

@section('scripts.head')<link rel="stylesheet" href="{{ url('css/libs/fancybox/fancybox.css') }}">@endsection
@section('scripts.footer')
<script src="{{ url('js/libs/fancybox.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("a.fancybox-images").fancybox({
            helpers : {
                title: {
                    type: 'inside',
                }
            }
        });
    });

    document.getElementById('shareOnFacebook').onclick = function() {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '{{ url()->current() }}',
            mobile_iframe: true,
        }, function(response){});
    }
</script>
@endsection
