//fetch("http://128.168.64.101:8000/api/foodcart/3")
fetch("http://128.168.64.101:8000/api/foodcart?area_id=3&keyword=&searchby=")
//fetch("asset/js/products.json")
.then(function(response){
    return response.json();
})

.then(function(categories){

        var menu =""; 
        var categories = categories.data;
        for (let i = 0; i < categories.length; i++) {
            var category = categories[i];
            // console.log(category.name)
            var category_holder = document.createElement('div')
            category_holder.innerHTML = `
                <div class = "category-title" id="`+category.name+`">
                    <li class="nav-item" style="padding-right: 10px">
                        <button class="btn btn-outline-success rounded" style="width:15rem" onclick="filterSelection('`+category.name+`')">`+category.name+`</button>
                    </li>
                </div>`;
            document.getElementById("category_nav").append(category_holder)

            for (let i = 0; i < category.menus.length; i++) {
                var menu = category.menus[i];
                // console.log(menu)    
                var placeholder = document.createElement('div')
                placeholder.className = "filterDiv "+category.name;
                placeholder.innerHTML = `
                    <div class="card shadow-sm bg-white rounded" id="`+menu.name+`">`+
                    `<img src="http://128.168.64.101:8000/images/`+menu.banner+`" class="card-img-top responsive" alt="...">`+
                        `<div class="card-body">`+
                            `<div class="d-flex justify-content-between">`+
                                `<h5 class="card-title" id="name">`+menu.name+`</h5>`+
                                `<span class="product-price">₱`+menu.price+`</span>`+
                            `</div>`+
                                `<p class="card-text" id="">`+menu.description+`</p>`+
                                `<button class="btn btn-primary order" type="submit">Order</button>`+
                                `<div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" id="count" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                              </div>`+
                        `</div>`+
                    `</div>`;
                document.getElementById("data-output").appendChild(placeholder)
                
            }

            wcqib_refresh_quantity_increments()
            search()
        }
            document.getElementById("show_all").click();
            ready()
            
            
});

function ready() {

    var removeCartItemButtons = document.getElementsByClassName('btn-close btn-linked')
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
    var count = shop.getElementsByClassName('input-text qty text')[0].value

    console.log(count);
    addItemToCart(menu, image, price, count)
    updateCartTotal()
    
}

function search(){
        // (A) GET HTML ELEMENTS
        var filter = document.getElementById("the-filter"), // search box
        list = document.querySelectorAll("#data-output div"); // all list items

        // (B) ATTACH KEY UP LISTENER TO SEARCH BOX
        filter.onkeyup = () => {
        // (B1) GET CURRENT SEARCH TERM
        let search = filter.value.toLowerCase();

        // (B2) LOOP THROUGH LIST ITEMS - ONLY SHOW THOSE THAT MATCH SEARCH
        for (let i of list) {
            let item = i.innerHTML.toLowerCase();
            if (item.indexOf(search) == -1) { i.classList.add("hide"); }
            else { i.classList.remove("hide"); }
        }
        };
}

function addItemToCart(menu, image, price,  count) {
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
                        <input type="button" value="-" class="minus" id="minus"><input type="number" id="count" step="1" min="1" max="" name="quantity" value="${count}" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" id="plus" class="plus">
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

function minusQuantity(){
    var button = cartRow.getElementById('#count')[0]
    console.log(button);
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
    console.log(quantity);
    document.getElementsByClassName('cart-total-price')[0].innerText = '₱' + total
    
}


function loadProducts(data){
    var temp = data.menus;
    var placeholder = document.createElement('div')
    placeholder.innerHTML = `
            <div class="card shadow-sm bg-white rounded">`+
            `<img srcc="`+data.image+`" class="card-img-top responsive" alt="...">`+
                `<div class="card-body">`+
                    `<div class="d-flex justify-content-between">`+
                        `<h5 class="card-title" id="name">`+data.name+`</h5>`+
                        `<span class="product-price">₱</span>`+
                    `</div>`+
                        `<p class="card-text" id="`+data.description+`"></p>`+
                        `<button class="btn btn-primary order" type="submit">Order</button>`+
                `</div>`+
            `</div>`;
    document.getElementById("data-output").appendChild(placeholder)
    var filter = document.getElementById("the-filter"), // search box
    list = document.querySelectorAll("#data-output div"); // all list items


    console.log(data.name)
}

function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}

String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }
 
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }
  
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
  
  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementById("show_all");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
 
 