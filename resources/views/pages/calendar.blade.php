@extends('layout')

@section('content')

@include('partials.header-navigation')

@include('partials.default-header')

<div id="app" class="container page-articles">

    <h2>Календар 2020</h2>

    <span>Купи си календар с кауза</span>

    <div class="hr-line">&nbsp;</div>

    <div class="row">
        <div class="col-sm-7">
            <p>
                За втора поредна година Backpack Nerd пуска собствен календар с кауза, но с увеличен тираж от 300 броя!<br><br>
                Симпатизирам на малка фондация наречена "Дивите животни". Харесвам тяхната дейност свързана с рехабилитация и отглеждане на осиротели или пострадали диви животни и връщане в естествената им среда.<br>
                С това далеч не се изчерпва тяхната активност. Голямата им цел е създаване на първия спасителен център в България, в който ще се приемат, лекуват и доотглеждат диви животни от всички видове, независимо от статута им на защитени или не.<br><br>
                Backpack Nerd иска да помогне на фондация "Дивите животни" като дари <span class="error-color">100% от печалбата</span> на продадените календари.<br>
                Цената за един брой календар е <span class="error-color">10 лева</span>.<br>
                Размерите му са 15 на 15 сантиметра - настолен - тип "пирамидка" със спирала. Състои се от корица и 12 листа с мои фотографии от прекрасни дестинации.<br><br>
                Заявените бройки могат да бъдат предадени лично в централната част на град София или да бъдат изпратени по куриер за сметка на получателя.<br><br>
                Можеш да заявиш твоята бройка чрез <a href="{{ url('/contacts') }}" target="_blank">контактната форма</a> на сайта или чрез съобщение в някой от социалните канали на Backpack Nerd.<br><br>
                Повече информация за фондацията можеш да откриеш на техният сайт - <a href="https://wildanimals.bg" target="_blank">wildanimals.bg</a> или <a href="https://www.facebook.com/DiviteJivotni" target="_blank">facebook</a> профил.<br><br>
                <span class="error-color">
                С гордост обявявам кампанията за успешно приключила!<br>
                Събраните средства в помощ на фондация "Дивите животни" са 2150 лева!
                </span>
            </p>
        </div>

        <div class="col-sm-5">
            <a href="images/calendar/calendar_20.jpg" title="Backpack Nerd Calendar 2020" class="fancybox-images">
                <img src="images/calendar/calendar_20_thumb.jpg" title="Backpack Nerd" alt="Backpack Nerd" class="img-responsive project-thumb" />
            </a>

            <a href="https://wildanimals.bg" target="_blank">
                <img src="images/wild_animals.png" title="Backpack Nerd - Wild Animals" alt="Backpack Nerd - Wild Animals" class="img-responsive" />
            </a>
        </div>
    </div>

    <a class="btn btn-fb" href="https://www.facebook.com/backpacknerd" target="_blank">
        <i class="fa fa-facebook-official" aria-hidden="true"></i> Backpack Nerd Facebook &raquo;
    </a>

    <a class="btn btn-fb" href="https://www.instagram.com/backpack.nerd" target="_blank">
        <i class="fa fa-instagram" aria-hidden="true"></i> Backpack Nerd Instagram &raquo;
    </a>

    <br><br><br>


    <h2>Календар 2019</h2>

    <span>Приключила кампания</span>

    <div class="hr-line">&nbsp;</div>

    <div class="row">
        <div class="col-sm-7">
            <p>
                С гордост обявявам кампанията за успешно приключила!<br>
                Тираж от 200 броя настолни календари се продаде за по-малко от 2 месеца.<br>
                Събраните средства в помощ на фондация "Дивите животни" са <span class="error-color">1474 лева</span>!
            </p>
        </div>

        <div class="col-sm-5">
            <a href="images/calendar/calendar_19.jpg" title="Backpack Nerd Calendar 2019" class="fancybox-images">
                <img src="images/calendar/calendar_19_thumb.jpg" title="Backpack Nerd" alt="Backpack Nerd" class="img-responsive project-thumb" />
            </a>

            <a href="https://wildanimals.bg" target="_blank">
                <img src="images/wild_animals.png" title="Backpack Nerd - Wild Animals" alt="Backpack Nerd - Wild Animals" class="img-responsive" />
            </a>
        </div>
    </div>

    <a class="btn btn-fb" href="https://www.facebook.com/backpacknerd" target="_blank">
        <i class="fa fa-facebook-official" aria-hidden="true"></i> Backpack Nerd Facebook &raquo;
    </a>

    <a class="btn btn-fb" href="https://www.instagram.com/backpack.nerd" target="_blank">
        <i class="fa fa-instagram" aria-hidden="true"></i> Backpack Nerd Instagram &raquo;
    </a>

    <div class="hr-line">&nbsp;</div>

</div>
@endsection

@section('meta.title'){{ "Календар 2020 - " }}@endsection
@section('meta.desc'){{ "Купи си календар с кауза - " }}@endsection
@section('og.title'){{ "Календар с кауза 2020 - Backpack Nerd" }}@endsection
@section('og.desc'){{ "Купи си календар с кауза - помощ на фондация Дивите животни - Backpack Nerd" }}@endsection
@section('og.image'){{ url('images/calendar/calendar_20_thumb.jpg') }}@endsection
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
</script>
@endsection
