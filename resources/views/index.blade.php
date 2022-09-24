<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <title>САМО-ВАРчик</title>
</head>
<body>

<header class="header">
    <div class="container">

        <div class="header__inner">

            <div class="header__col">

                <div class="header__logo">
                    <img src="" alt="logo">
                </div>

                <div class="header__content">
                    <h1 class="header__header">САМО-ВАРчик</h1>

                    <p class="header__text">Вари свое, натуральное!</p>

                    <p class="header__text__work">Работаем с 2010 года</p>
                </div>

            </div>

            <div class="header__col">

                <div class="header__content">

                    <div class="header__content__row">
                        <img class="header__icon" src="{{ asset("/assets/icons/tel.svg") }}" alt="tel">
                        <a class="header__tel" href="tel:">+7 (900) 123-45-67</a>
                    </div>

                    <div class="header__content__row">
                        <img class="header__icon" src="{{ asset("/assets/icons/map.svg") }}" alt="map">
                        <p class="header__address">Курган, Некрасова ул., 15Ас10, 4а</p>
                    </div>

                </div>


            </div>

            <div class="header__col">
                <button class="header__call">
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
                <div style="display: flex; gap: 40px">
                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>

                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>
                </div>


                <div style="display: flex; gap: 40px">
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
                <div style="display: flex; gap: 40px">
                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>

                    <div class="introduction__content">
                        <h3 class="introduction__title">Самогонные аппараты</h3>
                        <img class="introduction__image" src="{{ asset('assets/system.png') }}" alt="">
                    </div>
                </div>


                <div style="display: flex; gap: 40px">
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


<section class="catalog">
    <div class="container">

        <div class="catalog__inner">

            <div class="nav">
                <h4 class="nav__title">Категории товаров</h4>
                <a class="nav__item" href="">Самогонные аппараты</a>
                <a class="nav__item" href="">Дрожжи и сопутствующие товары</a>
                <a class="nav__item" href="">Дубовые бочки</a>
                <a class="nav__item" href="">Афганские казаны</a>
                <a class="nav__item" href="">Узбекские казаны</a>
                <a class="nav__item" href="">Печи для казанов</a>
                <a class="nav__item" href="">Коптильни</a>
                <a class="nav__item" href="">Мангалы и шапуры</a>
            </div>

            <div class="catalog__container">

                <h2 class="catalog__title">Список наших товаров</h2>

                <div class="catalog__content__item">

                    <h3 class="catalog__content__title">Самогонные аппараты</h3>

                    <div class="catalog__card__container">

                        <div class="catalog__card">

                            <div class="catalog__card__content">
                                <img class="catalog__card__preview" src="{{ asset('assets/system.png')  }}"
                                     alt="preview">
                                <div class="catalog__card__title">Универсальный самогонный аппарат “Миджет” 40 л.</div>
                            </div>

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

                            <div class="catalog__card__content">
                                <div class="catalog__card__status">В наличии</div>
                                <div class="catalog__card__price">2000 ₽</div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
