
/*Выпадающее меню "БАЗА"*/
OnClickBaseTopMenu = function (val) {
    child = $(val).children(".fa");
    dropmenu = $(val).parent(".base_top_menu").children(".dropmenu_base");
    if (dropmenu.hasClass("hidden")) {
        child.removeClass("fa-angle-right");
        child.addClass("fa-angle-down");
        dropmenu.removeClass("hidden");
    }
    else {
        child.removeClass("fa-angle-down");
        child.addClass("fa-angle-right");
        dropmenu.addClass("hidden");
    }
    }

$(document).ready(function(){
    $("#slider").slider({
            range: true,
            values : [ 50, 1124 ],//Значение, которое будет выставлено слайдеру при загрузке
            min : 50,//Минимально возможное значение на ползунке
            max : 1124,//Максимально возможное значение на ползунке
            step : 1,//Шаг, с которым будет двигаться ползунок
            create: function( event, ui ) {
                val0 = $( "#slider" ).slider("values", 0 );//При создании слайдера, получаем его значение в перемен. val
                $( "#contentSlider0" ).html( val0 );//Заполняем этим значением элемент с id contentSlider
                val1 = $( "#slider" ).slider("values", 1 );//При создании слайдера, получаем его значение в перемен. val
                $( "#contentSlider1" ).html( val1 );//Заполняем этим значением элемент с id contentSlider
            },
            slide: function( event, ui ) {
                $( "#contentSlider0" ).html( ui.values[0] );//При изменении значения ползунка заполняем элемент с id contentSlider
                $( "#contentSlider1" ).html( ui.values[1] );
            }
    });
});
$("div.container_product").hover(
    function () {
        $(this).addClass("hover_active");
    },
    function () {
        $(this).removeClass("hover_active");
    }
);
OnClickFilterTitle = function (val) {
    cur_parent = $(val).parent(".filter_title").parent(".filter");
    mark = $(val).children(".fa");
    if (cur_parent.hasClass("hide_filter")) {
        cur_parent.removeClass("hide_filter");
        mark.removeClass("fa-angle-right");
        mark.addClass("fa-angle-down");
    }
    else {
        cur_parent.addClass("hide_filter");
        mark.removeClass("fa-angle-down");
        mark.addClass("fa-angle-right");
    }
}
