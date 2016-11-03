
/*Выпадающее меню "БАЗА"*/
OnClickBaseTopMenu = function () {
        if ($("#title_icon").hasClass("fa-angle-right")) {
            $("#title_icon").removeClass("fa-angle-right");
            $("#title_icon").addClass("fa-angle-down");
            $("#dropmenu_base").removeClass("hidden");
        }
        else {
            $("#title_icon").removeClass("fa-angle-down");
            $("#title_icon").addClass("fa-angle-right");
            $("#dropmenu_base").addClass("hidden");
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

