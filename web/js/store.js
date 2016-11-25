'use strict';
// sessionStorage.clear();
if (sessionStorage.getItem('cart') == null) {
    $("#cartItems").text(emptyCart);
} else {
    var cart = jQuery.parseJSON(sessionStorage.getItem('cart'));
    countCart(cart);
}

function addToCart(id, price, name, quantity) {
    var cart = [];

    var cs = jQuery.parseJSON(sessionStorage.getItem('cs'));

    var defPrice = price;

    var curVal =  cs[0].value;

    console.log(cs);
    
    console.log(sessionStorage.getItem('cart'));
    
    if (sessionStorage.getItem('cart') == null) {
        sessionStorage.setItem('cart', 0);
    }

    if (sessionStorage.getItem('cart') == 0) {
        cart.push({
            curCode: cs[0].code,
            id: id,
            unitPrice: parseFloat(defPrice * curVal),
            name: name,
            quantity: quantity,
            defaultPrice: defPrice
        });

        var jsonCart = JSON.stringify(cart);

        sessionStorage.setItem('cart', jsonCart);

        countCart(jQuery.parseJSON(sessionStorage.getItem('cart')));

    } else {
        var storedCart = jQuery.parseJSON(sessionStorage.getItem('cart'));

        var checkId = _.findKey(storedCart, {'id': id});

       if (!checkId) {
           addNewItemToCart(id,price,name, quantity);
       } else {
           countQuantity(id, quantity);
       }
    }
}


function addNewItemToCart(id, price, name, quantity) {
    
    var storedCart = jQuery.parseJSON(sessionStorage.getItem('cart'));

    var cs = jQuery.parseJSON(sessionStorage.getItem('cs'));

    var defPrice = price;

    var curVal =  cs[0].value;

    console.log(cs);

    storedCart.push({
        id: id,
        unitPrice: parseFloat(defPrice * curVal),
        name: name,
        quantity: quantity,
        curCode: cs[0].code,
        defaultPrice: defPrice
    });

    sessionStorage.setItem('cart', JSON.stringify(storedCart));

    countCart(jQuery.parseJSON(sessionStorage.getItem('cart')));
}

function countQuantity (id, quantity) {
    var storedCart = jQuery.parseJSON(sessionStorage.getItem('cart'));

    _.findKey(storedCart, function(inCart) {
        if (id == inCart.id) {
            inCart.quantity = inCart.quantity + quantity;

            sessionStorage.setItem('cart', JSON.stringify(storedCart));
        
        }
    });

    countCart(jQuery.parseJSON(sessionStorage.getItem('cart')));
}

function countCart(cart) {
    var total = 0;

    _.findKey(cart, function(foo) {
        total += foo.quantity;
        $("#cartItems").text(total);
    })
}