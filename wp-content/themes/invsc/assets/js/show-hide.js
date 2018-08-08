$( function() {
    $(".show-hide-container").hide();

    jQuery(".show-hide").on("click", function () {
        var container = $(this).attr("data");
        jQuery("#" + container).fadeToggle("fast", "linear");
    });

    $("main").on("click", function () {
        jQuery(".show-hide-container").fadeOut("fast");
    })
} );

