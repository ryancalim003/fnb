if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-close btn-linked')
    //console.log(removeCartItemButtons)

    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    
    } 

    var quantityInputs = document.getElementsByClassName('input-text qty text')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        
        input.addEventListener('change', quantityChanged)
    }
    
    var addToCartButtons = document.getElementsByClassName('btn btn-primary order')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
}

function addToCartClicked(event) {
    var button = event.target
    var shop = button.parentElement.parentElement
    var menu = shop.getElementsByClassName('card-title')[0].innerText
    var image = shop.getElementsByClassName('card-img-top responsive')[0].src
    var price = shop.getElementsByClassName('product-price')[0].innerText
    addItemToCart(menu, image, price)
    updateCartTotal()
}

function addItemToCart(menu, image, price) {
    var cartRow = document.createElement('tr')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = document.getElementsByClassName('menu-name')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == menu) {
            alert('This is already added to the cart')
            return            
        }
    }

    var cartRowContents = `
                <td>
                    <button type="button" class="btn-close btn-linked"></button>
                </td>
                <th scope="row"><img src="${image}" class="card-img-left" alt="..." style="width: 50px; height:30px; "> 
                </th>
                <td class="menu-name"><p class="">${menu}</p></td>
                <td class="cart-price">${price}</td>
                <td>
                    <div class="quantity buttons_added">
                        <input class="input-text qty text" type="number" value="1">
                    </div>
                </td>
            `
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-close btn-linked')[0].addEventListener('click',removeCartItem)
    cartRow.getElementsByClassName('input-text qty text')[0].addEventListener('change',quantityChanged)
    
}

function removeCartItem(event) {
    var buttonClicked = event.target
       buttonClicked.parentElement.parentElement.remove()
       updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1
    }
    updateCartTotal()
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quatityElement = cartRow.getElementsByClassName('input-text qty text')[0]
        var price = parseFloat(priceElement.innerText.replace('₱',''))
        var quantity = quatityElement.value
        total = total + (price * quantity)

    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '₱' + total
    
}

