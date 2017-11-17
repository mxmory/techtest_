<? include "header.php" ?>

<div class="container">
    <main class="main">

        <div class="b-info">
            <div class="b-info__left">
                <div class="wrap">
                    <div class="b-info__item">
                        <div class="marker"></div>
                        <div class="btn b-info__btn">
                            Кнопка
                        </div>
                    </div>
                    <div class="b-info__item">
                        <div class="btn b-info__btn">
                            Кнопка
                        </div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="b-info__item b-slider">

                        <div class="swiper-container">
                            <div class="btn b-info__btn">
                                Кнопка
                            </div>
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><img width="100%" height="auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRajLY_6R9i1QLpNKw6yaHx5dlBXYYC7oTn3aJQRmtE7VUaHxyO" alt="img"></div>
                                <div class="swiper-slide"><img width="100%" height="auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRajLY_6R9i1QLpNKw6yaHx5dlBXYYC7oTn3aJQRmtE7VUaHxyO" alt="img"></div>
                                <div class="swiper-slide"><img width="100%" height="auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRajLY_6R9i1QLpNKw6yaHx5dlBXYYC7oTn3aJQRmtE7VUaHxyO" alt="img"></div>
                                ...
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="b-info__right">
                <div class="wrap--column">
                    <div class="b-info__item">
                        <div class="btn b-info__btn">
                            Кнопка
                        </div>
                    </div>
                    <div class="b-info__item">
                        <div class="btn b-info__btn">
                            Кнопка
                        </div>
                    </div>
                    <div class="b-info__item">
                        <div class="btn b-info__btn">
                            Кнопка
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="trending">
            <div class="trending__title">
                ПОПУЛЯРНЫЕ ТОВАРЫ:
            </div>

            <div class="btn trending__btn">
                ВСЕ ПОПУЛЯРНЫЕ ТОВАРЫ
            </div>
        </div>

        <div class="catalog">
            <?
              $price = [ '1000', '2000', '3000', '4000'];
              $title = ['Перфоратор BSOСH BGF 3000','Перфоратор BSOСH BGF 4000','Перфоратор BSOСH BGF 5000','Перфоратор BSOСH BGF 9000']
            ?>


            <?
                for ($i = 0; $i < 4; $i++) {
                    include "include_set/catalog_item.php";
                }
            ?>

        </div>

        <div class="trending">
            <div class="trending__title">
                ПОПУЛЯРНЫЕ ПРОИЗВОДИТЕЛИ:
            </div>

            <div class="btn trending__btn">
                ВСЕ ПРОИЗВОДИТЕЛИ
            </div>
        </div>

        <div class="retail">
            <div class="retail__item">
                <!--<div class="range-slider">
                    <input type="text" class="js-range-slider" value="" />
                    <span id ="r1">

                    </span>
                    -
                    <span id ="r2">

                    </span>
                </div>-->
            </div>

            <div class="retail__item">

            </div>
            <div class="retail__item">

            </div>
            <div class="retail__item">

            </div>
            <div class="retail__item">

            </div>
            <div class="retail__item">

            </div>
            <div class="retail__item">

            </div>
            <div class="retail__item">

            </div>

        </div>

    </main>
</div>

<div class="services">

</div>

<? include "footer.php" ?>