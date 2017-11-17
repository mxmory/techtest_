let catitem = {
    run() {
        /*$( ".catalog__img" ).hover(
            function() {
            $( ".catalog__img" ).hide();
            $( ".catalog__btn" ).show();
             }
        );*/
        $(".catalog__btn").toggleClass("inactive");
        $(".catalog__item").mouseenter(function() {
            $(this).find("img").removeClass("active").addClass("inactive");
            $(this).find(".catalog__btn").removeClass("inactive").addClass("active");
            // $('.catalog__btn').toggleClass("active");

        });

        $(".catalog__item").mouseleave(function() {
            $(this).find("img").removeClass("inactive").addClass("active");
            $(this).find(".catalog__btn").removeClass("active").addClass("inactive");
        });

    }
}

module.exports = catitem;




