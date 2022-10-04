<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">

    <meta name="keywords"
          content="самовар, самоварчик45, самоварчик45.рф, самогонные аппараты курган, шланги, термометр, РПН, царги, дрожжи, дубовые бочки, самогонные аппараты">
    <meta name="description"
          content="Самогонные аппараты, шланги, термометр, РПН, царги, дрожжи, товары для облагораживания дистиллята, дубовые бочки Казаны из Узбекистана, афганские казаны! Печи для казанов (УЧАГ). Коптильни горячего и холодного копчения. Мангалы и шампуры.">

    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Самоварчик">
    <meta property="og:description" content="Вари свое, натуральное!">
    <meta property="og:site_name" content="Самоварчик">
    <meta property="og:url" content="/">

    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('/apple-touch-icon.png')  }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('/favicon-32x32.png')  }}">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('/favicon-16x16.png')  }}">
    <link rel="manifest" href=" {{ asset('/site.webmanifest')  }}">
    <link rel="mask-icon" href=" {{ asset('/safari-pinned-tab.svg')  }}" color="#191919">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(90632244, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/90632244" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <title>САМО-ВАРчик</title>
</head>
<body>

@include('components.header')

<div class="line"></div>

@include('components.introduction')


<section class="content">
    <div class="container">

        <div class="content__inner">

            <div class="content__container">

                <h2 class="catalog__title">Список наших товаров</h2>

                @include('catalog.uzbek-cauldron')

                @include('catalog.afghan-cauldron')

                @include('catalog.furnace+cauldron')

                @include('catalog.bake')

                @include('catalog.skimmers-skewers')

                @include('catalog.smokehouse')

                @include('catalog.autoclave')

                @include('components.contact')

                @include('components.map')

            </div>

            <div class="nav">
                <div class="nav__sticky">
                    <div class="nav__content">
                        <a class="nav__title">Категории товаров</a>

                        <div class="nav__line"></div>

                        <a class="nav__item" data-anchor="uzbek-cauldron">Узбекские казаны</a>
                        <a class="nav__item" data-anchor="afghan-cauldron">Афганские казаны</a>
                        <a class="nav__item" data-anchor="furnace+cauldron">Комплекты: Печь + Казан</a>
                        <a class="nav__item" data-anchor="bake">Печи для казанов</a>
                        <a class="nav__item" data-anchor="skimmers-skewers">Шумовки и шампура</a>
                        <a class="nav__item" data-anchor="smokehouse">Коптильни</a>
                        <a class="nav__item" data-anchor="autoclave">Автоклавы</a>

                    </div>

                    <div class="nav__content transparent">
                        <div class="nav__line gray"></div>

                        <a href="" data-anchor="where" class="nav__title">Как нас найти</a>
                    </div>

                </div>

            </div>


        </div>

    </div>
</section>

@include('components.footer')

<div class="adaptive__header">

    <div class="container">

        <div class="adaptive__inner">

            <div id="menu" class="xs_menu">
                <div id="overlay" class="overlay c_xs_menu"></div>
                <div class="xs_cont">
                    <div class="c_xs_menu">
                        <img src="{{ asset('/assets/icons/close.svg')  }}" alt="close" id="closeMenuBtn">
                    </div>
                    <div class="adaptive__content__row">
                        <img class="adaptive__icon" src="{{ asset("/assets/icons/tel.svg") }}" alt="tel">
                        <a class="adaptive__tel" href="tel:+79630056030">+7 (963) 005-60-30</a>
                    </div>

                    <div class="adaptive__content__row">
                        <img class="adaptive__icon" src="{{ asset("/assets/icons/map.svg") }}" alt="map">
                        <p class="adaptive__address">Курган, Некрасова ул., 15Ас10, 4а</p>
                    </div>
                    <div class="adaptive__nav__content">
                        <a class="nav__title">Категории товаров</a>

                        <div class="nav__line"></div>

                        <a class="nav__item" data-anchor="uzbek-cauldron">Узбекские казаны</a>
                        <a class="nav__item" data-anchor="afghan-cauldron">Афганские казаны</a>
                        <a class="nav__item" data-anchor="furnace+cauldron">Комплекты: Печь + Казан</a>
                        <a class="nav__item" data-anchor="bake">Печи для казанов</a>
                        <a class="nav__item" data-anchor="skimmers-skewers">Шумовки и шампура</a>
                        <a class="nav__item" data-anchor="smokehouse">Коптильни</a>
                        <a class="nav__item" data-anchor="autoclave">Автоклавы</a>

                    </div>
                </div>

            </div>

            <div class="adaptive__tool">
                <img src="{{ asset('/assets/icons/menu.svg') }}" alt="menu" class="adaptive__burger" id="openMenuBtn">
            </div>

        </div>

    </div>


    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
