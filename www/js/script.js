
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
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        centerPadding: '100px',
        focusOnSelect: true,
        infinite: true,
        variableWidth: true,
        prevArrow: '<a class="slick_navigation left" href="javascript:void(0)" ><span class="icon-left-arrow_thin"></span></a>',
        nextArrow: '<a class="slick_navigation right" href="javascript:void(0)" ><span class="icon-right-arrow_thin"></span> </a>',
    });
    /*======ZOOMER============*/
    $('.jqzoom').jqzoom({
        zoomType: 'standard',
        lens:true,
        preloadImages: false,
        alwaysOn:false
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

//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {

            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").addAttr('disabled')
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
