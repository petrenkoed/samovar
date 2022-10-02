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

    <title>САМО-ВАРчик</title>
</head>
<body>

<header class="header">
    <div class="container">

        <div class="header__inner">

            <div class="header__col">

                <div class="header__logo">
                    <img src="{{ asset("/assets/logo.svg")  }}" alt="logo">
                </div>

                <div class="header__content">
                    <h1 class="header__header">САМО-ВАРчик</h1>

                    <p class="header__text">Вари свое, натуральное!</p>

                    {{--                    <p class="header__text__work">Работаем с 2010 года</p>--}}
                </div>

            </div>

            <div class="header__col">

                <div class="header__content">

                    <div class="header__content__row">
                        <img class="header__icon" src="{{ asset("/assets/icons/tel.svg") }}" alt="tel">
                        <a class="header__tel" href="tel:+79630056030">+7 (963) 005-60-30</a>
                    </div>

                    <div class="header__content__row">
                        <img class="header__icon" src="{{ asset("/assets/icons/map.svg") }}" alt="map">
                        <p class="header__address">Курган, Некрасова ул., 15Ас10, 4а</p>
                    </div>

                </div>


            </div>

            <div class="header__col">
                <button id="modal" class="header__call">
                    <svg class="header__phone__svg">
                        <use xlink:href="../assets/icons/tel.svg#tel"></use>
                    </svg>
                    <div>Перезвоните мне</div>
                </button>
            </div>

        </div>

    </div>
</header>

<div class="line"></div>

<section class="introduction">
    <div class="container">

        <div class="introduction__inner">

            <div class="introduction__content-big">
                <h3 class="introduction__title">Самогонные аппараты</h3>
                <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
            </div>


            <div class="introduction__container">
                <div class="introduction__control">
                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>

                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>
                </div>


                <div class="introduction__control">
                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>

                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>
                </div>

            </div>


        </div>

        <div class="introduction__inner">

            <div class="introduction__container">
                <div class="introduction__control">
                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>

                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>
                </div>


                <div class="introduction__control">
                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>

                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="introduction__content-big">
                <h3 class="introduction__title">Самогонные аппараты</h3>
                <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
            </div>

        </div>

    </div>
</section>


<section class="content">
    <div class="container">

        <div class="content__inner">

            <div class="content__container">

                <h2 class="catalog__title">Список наших товаров</h2>

                <div class="catalog__content__item">

                    <h3 id="moonshine-stills" class="catalog__content__title">Самогонные аппараты</h3>

                    <div class="catalog__card__container">

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>


                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="catalog__content__item">

                    <h3 id="yeast" class="catalog__content__title">Дрожжи</h3>

                    <div class="catalog__card__container">

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="catalog__content__item">

                    <h3 id="oak-barrels" class="catalog__content__title">Дубовые бочки</h3>

                    <div class="catalog__card__container">

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>


                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                    </div>

                </div>


                <section class="contact">
                    <div class="contact__header">
                        <img class="contact__icon" src="{{ asset('/assets/icons/map.svg')  }}" alt="icon">
                        <h3 class="contact__title">Контакты</h3>
                    </div>

                    <div class="contact__content">

                        <div class="contact__info__container">
                            <img class="contact__icon__info" src="{{ asset('/assets/icons/user.svg') }}" alt="user">
                            <p class="contact__info">ИП Корякина Елена Сергеевна</p>
                        </div>
                        <div class="contact__info__container">
                            <img class="contact__icon__info" src="{{ asset('/assets/icons/tel.svg') }}" alt="tel">
                            <a class="contact__info" href="tel:+79630056030">+7 (963) 005-60-30</a>
                        </div>
                        <div class="contact__info__container">
                            <img class="contact__icon__info" src="{{ asset('/assets/icons/map.svg') }}" alt="dot">
                            <p class="contact__info">Курган, Некрасова ул., 15Ас10, 4а</p>
                        </div>

                        <p class="contact__text">Самогонные аппараты, шланги, термометр, РПН, царги, дрожжи, товары для
                            облагораживания
                            дистиллята, дубовые бочки
                            Казаны из Узбекистана, афганские казаны! Печи для казанов (УЧАГ). Коптильни горячего и
                            холодного копчения. Мангалы и шампуры.</p>

                        <p class="contact__text">Большой выбор печей с трубой и без трубы под казаны с круглым и плоским
                            дном.
                            Работаем за наличный и безналичный расчет!</p>

                        <div class="contact__text--big">НА НЕКРАСОВА ВСЕГДА ДЕШЕВЛЕ!</div>

                    </div>

                </section>

                <section class="map">
                    <div class="map__header">
                        <img class="map__icon" src="{{ asset('/assets/icons/where.svg') }}" alt="icon">
                        <h3 id="where" class="map__title">Как нас найти</h3>
                    </div>

                    <div class="map__widget" style="position: relative; overflow: hidden"><a
                            href="https://yandex.ru/maps/org/samo_varchik/79212845827/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:0px;">САМО-ВАРчик</a><a
                            href="https://yandex.ru/maps/53/kurgan/category/homemade_equipment/186073544962/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Самогонное оборудование в
                            Кургане</a>
                        <iframe src="https://yandex.ru/map-widget/v1/-/CCUVnPWE9A"
                                frameborder="1" allowfullscreen="true" class="map__iframe"></iframe>
                    </div>

                </section>


            </div>

            <div class="nav">
                <div class="nav__sticky">
                    <div class="nav__content">
                        <a class="nav__title">Категории товаров</a>

                        <div class="nav__line"></div>

                        <a class="nav__item" data-anchor="moonshine-stills" href="">Самогонные аппараты</a>
                        <a class="nav__item" data-anchor="yeast" href="">Дрожжи и сопутствующие товары</a>
                        <a class="nav__item" data-anchor="oak-barrels" href="">Дубовые бочки</a>
                        <a class="nav__item" data-anchor="afghan-cauldrons" href="">Афганские казаны</a>
                        <a class="nav__item" data-anchor="" href="">Узбекские казаны</a>
                        <a class="nav__item" data-anchor="" href="">Печи для казанов</a>
                        <a class="nav__item" data-anchor="" href="">Коптильни</a>
                        <a class="nav__item" data-anchor="" href="">Мангалы и шапуры</a>
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

<footer class="footer">
    <div class="container">

        <div class="footer__inner">

            <div class="footer__logo">
                <img src="{{ asset("/assets/logo.svg")  }}" alt="logo">
            </div>

            <div class="footer__content">
                <h1 class="footer__header">САМО-ВАРчик</h1>

                <p class="footer__text">Вари свое, натуральное!</p>
            </div>

        </div>

    </div>
</footer>


<div class="adaptive__header">

    <div class="container">

        <div class="adaptive__inner">

            {{--            <div class="adaptive__logo">--}}
            {{--                <img src="" alt="logo">--}}
            {{--            </div>--}}

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

                        <a class="nav__item" data-anchor="moonshine-stills" href="">Самогонные аппараты</a>
                        <a class="nav__item" data-anchor="yeast" href="">Дрожжи и сопутствующие товары</a>
                        <a class="nav__item" data-anchor="oak-barrels" href="">Дубовые бочки</a>
                        <a class="nav__item" data-anchor="" href="">Афганские казаны</a>
                        <a class="nav__item" data-anchor="" href="">Узбекские казаны</a>
                        <a class="nav__item" data-anchor="" href="">Печи для казанов</a>
                        <a class="nav__item" data-anchor="" href="">Коптильни</a>
                        <a class="nav__item" data-anchor="" href="">Мангалы и шапуры</a>
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
