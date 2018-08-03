$( function() {
    $(".tab-item").hide();

    tabButton = $('.tabs .active');
    tabSwitch(tabButton);

    $(".tabs li").on("click", function () {
        tabSwitch($(this));
    })
} );

function tabSwitch(tabSelected) {
    tabItemId = tabSelected.attr("role");

    $(".tab-item").hide();
    $('.tabs li').removeClass("active");

    tabSelected.addClass("active");
    $("#" + tabItemId).show();
}