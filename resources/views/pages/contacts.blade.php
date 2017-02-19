@extends('layout')

@section('content')

@include('partials.default-header')

<div id="app" class="container page-articles">

    <h2>Контакти</h2>

    <p>
        Драсни ми един ред. Обещавам да отговоря!
    </p>

    <div class="hr-line">&nbsp;</div>

    @if(Session::has('contacted'))
        <div class="alert alert-success success-box">{{ Session::get('contacted') }}</div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger error-box">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url()->current() }}">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="input" name="contact_name" value="{{ old('contact_name') }}" class="form-control" placeholder="Име*">
        </div>

        <div class="form-group">
            <input type="email" name="contact_email" value="{{ old('contact_email') }}" class="form-control" placeholder="Е-поща*">
        </div>

        <div class="form-group">
            <textarea rows="4" name="contact_message" value="{{ old('contact_message') }}" class="form-control" placeholder="Съобщение*"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-def">Изпрати</button>
        </div>
    </form>

    <div class="hr-line">&nbsp;</div>

    <div class="row">
        <div class="col-sm-5">
            <img src="images/trayan_ivanov.jpg" class="img-responsive img-me" />
        </div>

        <div class="col-sm-7">
            <p>
                "I don't know half of you half as well as I should like.. and I like less than half of you half as well as you deserve.."<br />
                Bilbo Baggins
            </p>

            <i class="fa fa-2x fa-globe" aria-hidden="true"></i>
            <a href="http://trayan.co.uk" target="_blank">trayan.co.uk</a> (другото ми хоби/работа)

            <br />

            <i class="fa fa-2x fa-instagram" aria-hidden="true"></i>
            <a href="https://www.instagram.com/trayan.ivanov" target="_blank">trayan.ivanov</a> (много се радвам на последователи и лайкове)

            <br />

            <i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i>
            <a href="https://twitter.com/trayan_ivanov" target="_blank">trayan_ivanov</a> (не съм много активен тук)
        </div>
    </div>

    <div class="hr-line">&nbsp;</div>

</div>
@endsection

@section('meta.title'){{ "Контакти - " }}@endsection
@section('meta.desc'){{ "Контакти - " }}@endsection
@section('og.title'){{ "Контакти - Backpack Nerd" }}@endsection
@section('og.url'){{ url()->current() }}@endsection
