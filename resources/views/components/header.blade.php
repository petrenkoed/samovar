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
