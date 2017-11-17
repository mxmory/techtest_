<div class="catalog__item">
    <? if ($i == 2)
    {
    ?>
    <div class="marker"></div>
    <?
    }
    ?>
    <div class="catalog__img">
        <img src="../../local/client/img/cross.png" alt="img">
        <div class="catalog__btn">
            <div class="btn btn--catalog btn--order">
                Верхняя
            </div>

            <div class="btn btn--catalog btn--bookmark">
                Нижняя
            </div>
        </div>
    </div>

    <div class="wrap--catalog">
        <div class="catalog__title">
            <?=$title[$i]?>
        </div>
        <div class="catalog__price">

            <?=$price[$i]?>
        </div>
    </div>
</div>