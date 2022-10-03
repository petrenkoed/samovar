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
                        <h3 class="introduction__title">Узбекские казаны</h3>
                        <img class="introduction__image" src="{{ asset('assets/uzbek-cauldron.png') }}" alt="">
                    </div>

                    <div class="introduction__content">
                        <h3 class="introduction__title">Афганские казаны</h3>
                        <img class="introduction__image" src="{{ asset('assets/afghan-cauldron12.png') }}" alt="">
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

                    <h3 id="uzbek-cauldron" class="catalog__content__title">Узбекские казаны</h3>

                    <div class="catalog__card__container">

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/uzbek-cauldron.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Узбекский чугунный казан для дома 6 литров, плоское
                                    дно.
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">1650 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/uzbek-cauldron.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Узбекский чугунный казан для дома 8 литров, плоское дно.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2150 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/uzbek-cauldron.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Узбекский чугунный казан 10 литров, плоское дно.</div>
                            </div>

                            <div class="line"></div>


                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2400 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/uzbek-cauldron.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Узбекский чугунный казан 12 литров, плоское дно.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2700 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/uzbek-cauldron16.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Узбекский казан 16 литров чугун, круглое дно.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">3150 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/uzbek-cauldron16.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Узбекский казан 22 литра чугун, круглое дно.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">3450 ₽</div>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="catalog__content__item">

                    <h3 id="afghan-cauldron" class="catalog__content__title">Афганские казаны</h3>

                    <div class="catalog__card__container">

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron12.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 5 л. черный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron12.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 8 л. черный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron12.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 10 литров черный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron12.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 12 литров черный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron12.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 15 литров черный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron12.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 20 литров черный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron12.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 30 литров черный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron-multi.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 5 л. двухцветный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron-multi.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 8 л. двухцветный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron-multi.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 15 л. двухцветный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron-multi.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 20 л. двухцветный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/afghan-cauldron-multi.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Афганский казан-скороварка 20 л. двухцветный, алюминий.</div>
                            </div>

                            <div class="line"></div>

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/silicone-gasket.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Силиконовая прокладка к афганскому казану 5-8-10-15 л.</div>
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

                        <a class="nav__item" data-anchor="uzbek-cauldron">Узбекские казаны</a>
                        <a class="nav__item" data-anchor="afghan-cauldron">Афганские казаны</a>
                        <a class="nav__item" data-anchor="moonshine-stills">Самогонные аппараты</a>
                        <a class="nav__item" data-anchor="yeast">Дрожжи и сопутствующие товары</a>
                        <a class="nav__item" data-anchor="oak-barrels">Дубовые бочки</a>
                        <a class="nav__item" data-anchor="">Печи для казанов</a>
                        <a class="nav__item" data-anchor="">Коптильни</a>
                        <a class="nav__item" data-anchor="">Мангалы и шапуры</a>
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

                        <a class="nav__item" data-anchor="uzbek-cauldron">Узбекские казаны</a>
                        <a class="nav__item" data-anchor="afghan-cauldron">Афганские казаны</a>
                        <a class="nav__item" data-anchor="moonshine-stills">Самогонные аппараты</a>
                        <a class="nav__item" data-anchor="yeast">Дрожжи и сопутствующие товары</a>
                        <a class="nav__item" data-anchor="oak-barrels">Дубовые бочки</a>
                        <a class="nav__item" data-anchor="">Печи для казанов</a>
                        <a class="nav__item" data-anchor="">Коптильни</a>
                        <a class="nav__item" data-anchor="">Мангалы и шапуры</a>
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
