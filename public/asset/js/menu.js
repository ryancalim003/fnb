//fetch("http://128.168.64.101:8000/api/foodcart/3")
fetch("asset/js/products.json")
// .then(function(response){
//     return response.json();
// })

// .then(function(categories){
//     console.log(categories.data[0]);
//     let placeholder = document.getElementById("data-output");
//     let out = "";

    

// })


// .then(function(response){
//     let placeholder = document.getElementById("data-output");
//     let categories = response;
//     let out = "";
//     for(var category in categories){
//         out +=`
//         <div class="col">
//             <div class="card shadow-sm bg-white rounded">
//                 <img src="${category.image}" class="card-img-top responsive" alt="...">
//                 <div class="card-body">         
//                     <div class="d-flex justify-content-between">
//                         <h5 class="card-title">'${category.name}'</h5>
//                         <span class="product-price">₱'${category.price}'</span>
//                     </div>
//                 <p class="card-text">'${category.description}'</p>
//                 <button class="btn btn-primary order" type="submit">Order</button>
                
//                 </div>
//             </div>
//         </div>
//         `;

//     }
//     placeholder.innerHTML = out;
//     console.log(categories)


// })


// $.ajax({
//     type:"GET",
//     url:"http://128.168.64.101:8000/api/foodcart/3",
//     success:function(categories){
//         $(categories.data).each(function(index, value){
//             category = value;
//             menu = category.menus
//             console.log(menu);
            
//             $('#exampleid').append("<tr>\
//                     <td>"+category.name+"</td>\
//                     <td>"+category.id+"</td>\
//                     <td>"+category.description+"</td>\
//                     </tr>");
//         });
//     }
// });


.then(function(response){
    return response.json();
})

.then(function(categories){
    var menu ="";

    // categories.data.forEach((data) => {
    //     loadProducts(data)
    // })
    
        var categories = categories.data;     
        for (let i = 0; i < categories.length; i++) {
            var category = categories[i];
            console.log(category.name)

            for (let i = 0; i < category.menus.length; i++) {
                var menu = category.menus[i];
                console.log(menu)    
                var placeholder = document.createElement('div')
                    placeholder.innerHTML = `
                            <div class="card shadow-sm bg-white rounded">`+
                            `<img srcc="`+menu.image+`" class="card-img-top responsive" alt="...">`+
                                `<div class="card-body">`+
                                    `<div class="d-flex justify-content-between">`+
                                        `<h5 class="card-title" id="name">`+menu.name+`</h5>`+
                                        `<span class="product-price">₱`+menu.price+`</span>`+
                                    `</div>`+
                                        `<p class="card-text" id="">`+menu.description+`</p>`+
                                        `<button class="btn btn-primary order" type="submit">Order</button>`+
                                `</div>`+
                            `</div>`;
                    document.getElementById("data-output").appendChild(placeholder)
            }
            
        }
        if (document.readyState == 'loading') {
            document.addEventListener('DOMContentLoaded', ready)
        } else {
            ready()
        }
        
        function ready() {
            var removeCartItemButtons = document.getElementsByClassName('btn-close btn-linked')
            console.log(removeCartItemButtons)
        
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
        
        
    });
   

    
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
    console.log(data.name)
}
