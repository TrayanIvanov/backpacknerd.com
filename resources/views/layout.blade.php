<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('meta.title'){{ 'Backpack Nerd' }} </title>
    <meta name="Description" content="@yield('meta.desc'){{ 'Backpack Nerd - Сайт за планински туризъм, разходки по света и у нас и фотография.' }}" />
    <meta name="Keywords" content="{{ 'backpack,nerd,hiking,хайкинг,туризъм,tourism,планина,mountain,блог,blog,България,Bulgaria,trayan' }}" />

    <meta property="fb:app_id" content="1815326942053960" />
    <meta property="og:title" content="@yield('og.title', 'Backpack Nerd')" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('og.desc', 'Backpack Nerd - Сайт за планински туризъм, разходки по света и у нас и фотография.')" />
    <meta property="og:image" content="@yield('og.image', url('images/og_image.jpg'))" />
    <meta property="og:url" content="@yield('og.url', url('/'))" />

    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    @yield('scripts.head')
</head>
<body id="app-layout">

    @include('partials.header')

    @yield('content')

    <script src="{{ url('js/app.js') }}"></script>

    @include('partials.footer')

    @yield('scripts.footer')
</body>
</html>
