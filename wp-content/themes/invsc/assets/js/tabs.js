$( function() {
    tabButton = $('.tabs .active button');
    tabSwitch(tabButton);

    $(".tabs li button").on("click", function () {
        tabSwitch($(this));
    })
} );

function tabSwitch(tabSelected) {
    tabItemId = tabSelected.attr("role");

    $(".tab-item").hide();
    $("#" + tabItemId).show();
}