jQuery(document).ready(function ($) {


    // Dviejų lygių navigacija
    $('#navigation>li').hover(function () {
        $(this).children('.sub-navigation').stop(true, true).slideDown('fast');
        $(this).addClass('active');
    }, function () {
        $(this).children('.sub-navigation').stop(true, true).slideUp('fast');
        $(this).removeClass('active');
    });

    // Prekių lentelė papildoma fiktyviais duomenimis
    for (var i = 1; i <= 12; i++) {
        var demand = Math.floor(Math.random() * 50);
        var time = Math.floor(Math.random() * 10);
        $('.product-flow').append("<tr><td>" + i + "</td><td>" + demand + "</td><td>" + time + "</td></tr>");
    }

    // Prekių lentelės duomenys nuskaitomi
    var productFlow = [];
    $('.product-flow tr').nextAll().each(function () {
        productFlow.push({
            month: $(this).find('td:eq(0)').text(),
            demand: parseInt($(this).find('td:eq(1)').text()),
            time: parseInt($(this).find('td:eq(2)').text())
        });
    });

    // Diagramos braižymas
    //var chart = new Chart("product-flow", productFlow);
    //chart.draw();

    var $dragging = null;

    // Slider
    $(".range-handle").on("mousedown", function (e) {
        $dragging = $(this);
    });

    $(document.body).on("mouseup", function (e) {
        $dragging = null;
    });

    $(document.body).on("mousemove", function (e) {

        if ($dragging) {
            var draggingValue =  Math.max(0,
                    Math.min($dragging.parent().width(),
                        e.pageX - $dragging.parent().offset().left - parseInt($(this).css('padding')) - $dragging.width()));

            $dragging.css("margin-left", draggingValue);

            var ratio = 100 / $dragging.parent().width();
            $dragging.parent().prev().html(Math.round(ratio * draggingValue) + "%");
        }
    })

});