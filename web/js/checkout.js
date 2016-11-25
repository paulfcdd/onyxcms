'use strict';

var checkoutPrice = jQuery.parseJSON(sessionStorage.getItem('cart'));

var forPayu = jQuery.parseJSON(sessionStorage.getItem('cart'));

var totalCheckout = 0;

var cs = jQuery.parseJSON(sessionStorage.getItem('cs'));

var currencyCode = cs[0].code;

_.find(checkoutPrice, function (foo) {
   totalCheckout += foo.unitPrice * foo.quantity;
   $(".totalCheckout").text(totalCheckout.toFixed(2));
});

$('.delivery').text($(".deliveryPrice").find(':selected').data('price'));

$(".totalCheckoutPrice").text(
    (parseFloat($(".totalCheckout").text()) + parseFloat($(".delivery").text())).toFixed(2)
);

$(".postCheckoutPrice").val($(".totalCheckoutPrice").text());

_.find(forPayu,function(inCart) {
   inCart.unitPrice = (inCart.unitPrice * 100).toFixed(0);
   inCart.unitPrice = inCart.unitPrice.toString();
   inCart.quantity = inCart.quantity.toString();
});

$(".cartContent").val(JSON.stringify(cart));
$(".forPayu").val(JSON.stringify(forPayu));
$(".code").val(currencyCode);

function testKek() {
   $('.delivery').text($(".deliveryPrice").find(':selected').data('price'));
   $(".totalCheckoutPrice").text(
       (parseFloat($(".totalCheckout").text()) + parseFloat($(".delivery").text())).toFixed(2)
   );

   $(".postCheckoutPrice").val($(".totalCheckoutPrice").text());

}

