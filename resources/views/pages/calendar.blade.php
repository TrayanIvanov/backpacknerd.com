@extends('layout')

@section('content')

@include('partials.header-navigation')

@include('partials.default-header')

<div id="app" class="container page-articles">

    <h2>Календар 2019</h2>

    <span>Купи си календар с кауза</span>

    <div class="hr-line">&nbsp;</div>

    <div class="row">
        <div class="col-sm-7">
            <p>
                Тази година реших да се захвана с нещо, което не съм правил досега..<br />
                Календар!<br /><br />
                И то не просто календар, а календар с кауза!<br />
                Симпатизирам на малка фондация наречена "Дивите животни". Харесвам тяхната дейност свързана с рехабилитация и отлгеждане на осиротели или пострадали диви животни и връщане в естествената им среда.<br />
                С това далеч не се изчерпва тяхната активност, а голямата им цел е създаване на първия спасителен център в България, в който ще се приемат, лекуват и отглеждат диви животни от всякакъв вид, независимо от статута им на защитени или не.<br /><br />
                Backpack Nerd иска да помогне на тази кауза като дари <span class="success-color">100% от печалбата</span> на продадените календари на фондация "Дивите животни".<br />
                Цената на календар е <span class="success-color">9 лева</span>.<br />
                Размери 15 на 15 сантиметра - настолен - тип "пирамидка" със спирала. Състои се от корица и 12 листа с фотографии от прекрасни български дестинации.<br /><br />
                В момента заявените бройки се предават лично за територията на град София, но до няколко дни ще обявя и доставка за страната до офис на конкретна куриерска фирма.<br />
                Можеш да заявиш твоята бройка чрез <a href="{{ url('/contacts') }}" target="_blank">контактната форма</a> на сайта или чрез съобщение в някой от социалните канали на Backpack Nerd.<br /><br />
                Повече информация за фондацията можеш да откриеш на техния сайт - <a href="https://wildanimals.bg" target="_blank">wildanimals.bg</a> или <a href="https://www.facebook.com/DiviteJivotni" target="_blank">facebook</a> профил.
            </p>
        </div>

        <div class="col-sm-5">
            <a href="images/calendar.jpg" title="Backpack Nerd Calendar 2019" class="fancybox-images">
                <img src="images/calendar_thumb.jpg" title="Backpack Nerd" alt="Backpack Nerd" class="img-responsive project-thumb" />
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

@section('meta.title'){{ "Календар 2019 - " }}@endsection
@section('meta.desc'){{ "Купи си календар с кауза - " }}@endsection
@section('og.title'){{ "Календар с кауза 2019 - Backpack Nerd" }}@endsection
@section('og.desc'){{ "Купи си календар с кауза - помощ на фондация Дивите животни - Backpack Nerd" }}@endsection
@section('og.image'){{ url('images/calendar_thumb.jpg') }}@endsection
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
