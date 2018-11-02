$( function() {
    $(".tab-item").hide();

    tabButton = $('.tabs .active');
    tabSwitch(tabButton);

    $(".tabs li").on("click", function () {
        tabSwitch($(this));
    });

    var tabName = window.location.hash;


    if(typeof tabName != undefined) {
        var role = tabName.split('#');
        var element = $("li[role=" + role[1] + "-tab]");

        element.click();
    }
} );

function tabSwitch(tabSelected) {
    var tabItemId = tabSelected.attr("role");

    $(".tab-item").hide();
    $('.tabs li').removeClass("active");

    tabSelected.addClass("active");
    $("#" + tabItemId).show();
}