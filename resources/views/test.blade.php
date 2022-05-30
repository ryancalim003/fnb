@extends('layouts.master')

@section('content')
<style>
   .filterDiv {

     display: none;
   }
   
   .show {
     display: block;
   }

   .btn.active {
     background-color: #666;
     color: white;
   }
   </style>
   
<div id="myBtnContainer">
   <button class="btn" onclick="filterSelection('all')"> Show all</button>
   <button class="btn" onclick="filterSelection('Starter')"> Starter</button>
   <button class="btn" onclick="filterSelection('Fersh and Organice')"> Fersh and Organice</button>
   <button class="btn" onclick="filterSelection('Pizza Trolley')"> Pizza Trolley</button>
   <button class="btn" onclick="filterSelection('Ramen')"> Ramen</button>
 </div>
 

   <div class="row row-cols-1 row-cols-md-3 g-4" id="data-output">
      
         <div class="filterDiv Starter">
            <div class="card shadow-sm bg-white rounded">
               <img src="${category.image}" class="card-img-top responsive" alt="...">
               <div class="card-body">         
                  <div class="d-flex justify-content-between">
                     <h5 class="card-title" id="name">Apple</h5>
                        <span class="product-price">₱</span>
                  </div>
               <p class="card-text" id="description"></p>
               <button class="btn btn-primary order" type="submit">Order</button>
            </div>   
            </div>
         </div>
     
     
         <div class="filterDiv Ramen">
            <div class="card shadow-sm bg-white rounded">
               <img src="${category.image}" class="card-img-top responsive" alt="...">
               <div class="card-body">         
                  <div class="d-flex justify-content-between">
                     <h5 class="card-title" id="name">Banana</h5>
                        <span class="product-price">₱</span>
                  </div>
                  <p class="card-text" id="description"></p>
                  <button class="btn btn-primary order" type="submit">Order</button>
               </div>
            </div>
         </div>
      
         <div class="filterDiv Pizza Trolley">
            <div class="card shadow-sm bg-white rounded">
               <img src="${category.image}" class="card-img-top responsive" alt="...">
               <div class="card-body">         
                  <div class="d-flex justify-content-between">
                     <h5 class="card-title" id="name">Mango</h5>
                     <span class="product-price">₱</span>
                  </div>
                  <p class="card-text" id="description"></p>
                  <button class="btn btn-primary order" type="submit">Order</button>
               </div>
            </div>
         </div>

         <div class="filterDiv colors">
            <div class="card shadow-sm bg-white rounded">
               <img src="${category.image}" class="card-img-top responsive" alt="...">
               <div class="card-body">         
                  <div class="d-flex justify-content-between">
                     <h5 class="card-title" id="name">Mango</h5>
                     <span class="product-price">₱</span>
                  </div>
                  <p class="card-text" id="description"></p>
                  <button class="btn btn-primary order" type="submit">Order</button>
               </div>
            </div>
         </div>
      
   </div>
 
 <script>
fetch("http://128.168.64.101:8000/api/foodcart/3")
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
                    <div class="card shadow-sm bg-white rounded" id="">`+
                    `<img src="http://128.168.64.101:8000/images/`+menu.banner+`" class="card-img-top responsive" alt="...">`+
                        `<div class="card-body">`+
                            `<div class="d-flex justify-content-between">`+
                                `<h5 class="card-title" id="name">`+menu.name+`</h5>`+
                                `<span class="product-price">₱`+menu.price+`</span>`+
                            `</div>`+
                                `<p class="card-text" id="">`+menu.description+`</p>`+
                                `<button class="btn btn-primary order" type="submit">Order</button>`+
                                `<input type="button" value="-" class="minus"><input type="number" id="cart-quantity-input1" step="1" min="1" max="" name="cart-price-input" value="1" title="Qty" class="input-text qty text"><input type="button" value="+" class="plus">`+
                        `</div>`+
                    `</div>`;
                document.getElementById("data-output").appendChild(placeholder)
                
            }
            
        }      
});



 filterSelection("all")
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
 var btns = btnContainer.getElementsByClassName("btn");
 for (var i = 0; i < btns.length; i++) {
   btns[i].addEventListener("click", function(){
     var current = document.getElementsByClassName("active");
     current[0].className = current[0].className.replace(" active", "");
     this.className += " active";
   });
 }
 </script>
{{-- 
<input type="text" id="the-filter" placeholder="Search For..."/>


<div class="row row-cols-1 row-cols-md-3 g-4" id="the-list">

   <div class="col">
      <div class="card shadow-sm bg-white rounded">
          <img src="${category.image}" class="card-img-top responsive" alt="...">
          <div class="card-body">         
              <div class="d-flex justify-content-between">
                <h5 class="card-title" id="name">Apple</h5>
                  <span class="product-price">₱</span>
              </div>
          <p class="card-text" id="description"></p>
         <button class="btn btn-primary order" type="submit">Order</button>
        </div>
      </div>
   </div>
   <div class="col">
      <div class="card shadow-sm bg-white rounded">
         <img src="${category.image}" class="card-img-top responsive" alt="...">
         <div class="card-body">         
            <div class="d-flex justify-content-between">
               <h5 class="card-title" id="name">Banana</h5>
                  <span class="product-price">₱</span>
            </div>
         <p class="card-text" id="description"></p>
         <button class="btn btn-primary order" type="submit">Order</button>
      </div>
      </div>
   </div>
   <div class="col">
      <div class="card shadow-sm bg-white rounded">
         <img src="${category.image}" class="card-img-top responsive" alt="...">
         <div class="card-body">         
            <div class="d-flex justify-content-between">
               <h5 class="card-title" id="name">Mango</h5>
               <span class="product-price">₱</span>
            </div>
         <p class="card-text" id="description"></p>
         <button class="btn btn-primary order" type="submit">Order</button>
      </div>
      </div>
   </div>

  <div>Apricots</div>
  <div>Avocado</div>
  <div>Banana</div>
  <div>Blackberries</div>
  <div>Blueberries</div>
  <div>Cherries</div>
  <div>Coconut</div>
  <div>Cranberries</div>
  <div>Durian</div>
  <div>Elderberries</div>
  <div>Grapefruit</div>
  <div>Grapes</div>
  <div>Guava</div>
  <div>Honeydew</div>
  <div>Jackfruit</div>
  <div>Longan</div>
  <div>Loquat</div>
  <div>Mango</div>
  <div>Orange</div>
  <div>Papaya</div>
  <div>Pear</div>
  <div>Pineapple</div>
  <div>Strawberries</div>
  <div>Watermelon</div>
</div>
<style>

#the-list div:hover { background: #fffed6; }
#the-list div.hide { display: none; }
</style>

<script>
   window.addEventListener("load", () => {

  var filter = document.getElementById("the-filter"), // search box
      list = document.querySelectorAll("#the-list div"); // all list items
 
  
  filter.onkeyup = () => {
    
    let search = filter.value.toLowerCase();
 
    for (let i of list) {
      let item = i.innerHTML.toLowerCase();
      if (item.indexOf(search) == -1) { i.classList.add("hide"); }
      else { i.classList.remove("hide"); }
    }
  };
});
</script> --}}

@endsection