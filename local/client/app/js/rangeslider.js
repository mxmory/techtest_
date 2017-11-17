let rslider = {
    run() {
        var $range = $(".js-range-slider");

        $range.ionRangeSlider({
            type: "double",
            min: 0,
            max: 30000,
            from: 1000,
            to: 20000,
            step: 100,
            min_interval: 1000,
            prettify_enabled: true,
            hide_min_max: true,
            hide_from_to: true
        });


        $range.on("scope", function () {
            var $this = $(this),
                xvalue = $this.prop("from");
                alert(xvalue);

            document.getElementById("r1").innerHTML = xvalue;

        });

        $range.on("change", function () {
            var $this = $(this),
                value = $this.prop("value").split(";");

            document.getElementById("r1").innerHTML = value[0];
            document.getElementById("r2").innerHTML = value[1];
        });
    }
}

module.exports = rslider;