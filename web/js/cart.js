'use strict';

console.log(emptyCart);
var cart = jQuery.parseJSON(sessionStorage.getItem('cart'));

var a = 0;


if (cart == null) {
    $(".itemList").html("<div class='alert alert-warning'><strong>"+emptyCart+"</strong></div>");
}


var newHTML = [];

jQuery.each(cart, function (key, value) {
    newHTML.push(
        "<tr id=" + value['id'] + ">" +
        "<td><span>" + value['name'] + "</span></td>" +
        "<td><div class='input-group'>" +
        "<input type='text' id=" + value['id'] + "  value=" + value['quantity'] + " class='form-control quantity'>" +
        "<span class='input-group-btn'>" +
        "<button class='btn btn-primary' type='button' onclick='refreshFunc(" + value['unitPrice'] + "," + value['id'] + ")'><i class='fa fa-refresh' aria-hidden='true'></i></button>"
        + "</span>" +
        "</div></td>" +
        "<td class='price' data-defaultPrice="+value['defaultPrice']+"><p id=" + value['id'] + ">" + (value['unitPrice'] * value['quantity']).toFixed(2) + "</p></td>" +
        "<td><button class='btn btn-danger' id=" + value['id'] + " onclick='removeItem(" + value['id'] + ")'><span class='glyphicon glyphicon-remove'></span></button></td>"
        +
        "</tr>"
    );
});


$(".itemList tbody").html(newHTML);

function refreshFunc(price, id) {

    var quantity = $('input[id = ' + id + ']').val();
    var totalPrice = quantity * price;
    var total = 0;

    countQuantityCart(id, quantity);

    $('p[id = ' + id + ' ]').html(totalPrice.toFixed(2));

    $('.price').each(function () {
        var itemPrices = $(this).text();
        total += parseFloat(itemPrices);
        return total;
    });

    $("#total").html(total.toFixed(2));

    console.log(total);
}

$('.price').each(function () {
    a += parseFloat($(this).text());
    return a;
});

$("#total").html(a.toFixed(2));
sessionStorage.setItem('totalPrice', a);

// function calcTotal(price, id) {
//     var quantity = $('input[id = ' + id + ']').val();
//     $('p[id = ' + id + ' ]').html((quantity * price).toFixed(2));
// }
//
// $(".quantity").bind('keyup', function () {
//
//     var quantity = this.value;
//     var price = $(this).data("price");
//     var id = this.id;
//     $('p[id = ' + id + ' ]').html((quantity * price).toFixed(2));
// });
//
// $('.price').bind("DOMSubtreeModified",function(){
//     $('.price').each(function () {
//         console.log($(this).text());
//         a += parseFloat($(this).text());
//         return a;
//     });
//
//     $("#total").html(a.toFixed(2));
// });
//<input id=" + value['id'] + " data-price=" + value['price'] + " type='number' value=" + value['quantity'] + " class='form-control quantity' min='1' step='1' onclick='calcTotal(" + value['price'] + ", " + value['id'] + ")'>

function countQuantityCart(id, quantity) {

    var storedCart = jQuery.parseJSON(sessionStorage.getItem('cart'));

    _.findKey(storedCart, function (inCart) {
        if (id == inCart.id) {
            inCart.quantity = parseFloat(quantity);

            sessionStorage.setItem('cart', JSON.stringify(storedCart));
        }
    });

    countCart(jQuery.parseJSON(sessionStorage.getItem('cart')));
}

function removeItem(id) {
    var storedCart = jQuery.parseJSON(sessionStorage.getItem('cart'));

    $('tr[id = ' + id + ' ]').remove();

    var modifyCart = _.remove(storedCart, function (inCart) {
        return inCart.id !== id;
    });

    console.log(modifyCart);

    sessionStorage.setItem('cart', JSON.stringify(modifyCart));

    if (modifyCart.length == 0) {
        sessionStorage.removeItem('cart');

        $(".itemList").html("<div class='alert alert-warning'><strong>emptyCart</strong></div>");

        $("#cartItems").text(emptyCart);
    }

    countCart(modifyCart);

}

function countCart(cart) {
    var total = 0;
    var price = 0;

    _.findKey(cart, function (foo) {
        total += foo.quantity;

        console.log(total);

        $("#cartItems").text(total);
    });

    $('.price').each(function () {
        var itemPrices = $(this).text();
        price += parseFloat(itemPrices);
        return price;
    });

    $("#total").html(price.toFixed(2));

}