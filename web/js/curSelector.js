'use strict';
//sessionStorage.clear();

if (sessionStorage.getItem('currency') == null) {
    $('li').find("[data-value='1.00']").addClass('default');
    /*currency settings*/
    var cs = [];

    cs.push({
        value: $("li").find("[class='default']").data('value'),
        code: $("li").find("[class='default']").data('code')
    });

    sessionStorage.setItem('cs', JSON.stringify(cs));

    console.log(jQuery.parseJSON(sessionStorage.getItem('cs')));

    $(".symbolLeft").each(function () {
        $(this).text($(".default").attr("data-symbolLeft"));
    });
    $(".symbolRight").each(function () {
        $(this).text($(".default").attr("data-symbolRight"));
    });
} else {
    $("li").find("[id='" + sessionStorage.getItem('currency') + "']").toggleClass('default');

    console.log(jQuery.parseJSON(sessionStorage.getItem('cs')));

    var currencyVal = $("li").find("[class='default']").data('value');

    $(".product-price").each(function () {
        var defaultPrice = parseFloat($(this).attr("data-defaultPrice"));
        $(this).text((defaultPrice * currencyVal).toFixed(2));
    });
    $(".symbolLeft").each(function () {
        $(this).text($(".default").attr("data-symbolLeft"));
    });
    $(".symbolRight").each(function () {
        $(this).text($(".default").attr("data-symbolRight"));
    });
}



function changeCurrency (currency) {
    var a = 0;

    sessionStorage.setItem('currency', $(currency).attr('id'));

    var cs = jQuery.parseJSON(sessionStorage.getItem('cs'));

    var storedCart = jQuery.parseJSON(sessionStorage.getItem('cart'));

    _.findKey(storedCart, function (setVal) {
        setVal.curCode = $(currency).data('code');
        setVal.unitPrice = setVal.defaultPrice * $(currency).data('value');

        sessionStorage.setItem('cart', JSON.stringify(storedCart));
    });

    // console.log(jQuery.parseJSON(sessionStorage.getItem('cart')));

    _.findKey(cs, function (setVal) {
        setVal.code = $(currency).data('code');
        setVal.value = $(currency).data('value');

        sessionStorage.setItem('cs', JSON.stringify(cs));
    });

    $(".price").each(function () {
        var defPrice = $(this).attr('data-defaultPrice');
        var currencyValue = $(currency).data('value');
        $(this).text(parseFloat(defPrice * currencyValue).toFixed(2));
        a += parseFloat(defPrice * currencyValue);
        return a;
    });

    $("#total").html(a.toFixed(2));

    $(".product-price").each(function() {
        var defaultPrice = parseFloat($(this).attr("data-defaultPrice"));
        // console.log(defaultPrice);
        var currencyVal = $(currency).data('value');
        $(this).text((defaultPrice * currencyVal).toFixed(2));
    });

    $(".symbolLeft").each(function () {
        $(this).text($(currency).data('symbolleft'));
    });
    $(".symbolRight").each(function () {
        $(this).text($(currency).data('symbolright'));
    });
}
