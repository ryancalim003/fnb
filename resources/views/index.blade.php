@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row bg-light">
          <div class="col-sm-12" style="padding:10px">
              <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="margin-bottom:20px">
                  <div class="collapse navbar-collapse overflow-auto" id="">
                    <div class="col-sm-11" id = "navbarNav">
                    <ul class="navbar-nav mr-auto" id="category_nav">
                      <li class="nav-item" style="padding-right: 10px">
                        {{-- <button type="button" class="btn btn-outline-success rounded"  style="width:5rem" id="all">All</button> --}}
                        <button class="btn btn-outline-success rounded" id="show_all" style="width:5rem" onclick="filterSelection('all')">All</button>

                      </li>
                    </ul>
                  </div>

                  </div>

                </nav>
              
                {{-- <input type="text" id="the-filter" placeholder="Search For..."/> --}}

                
              <div class="row row-cols-1 row-cols-md-3 g-4" id="data-output">
                
                {{-- Add to cart function --}}
                {{-- <div class="col" id="load_product">
                      <div class="card shadow-sm bg-white rounded">
                          <img src="${category.image}" class="card-img-top responsive" alt="...">
                          <div class="card-body">         
                              <div class="d-flex justify-content-between">
                                <h5 class="card-title" id="name"></h5>
                                  <span class="product-price">₱</span>
                              </div>
                          <p class="card-text" id="description"></p>
                         <button class="btn btn-primary order" type="submit">Order</button>
                        </div>
                      </div>
                </div> --}}
                
              </div>
            </div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalLabel">My Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Action</th>
                    <th scope="col">Item</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
 
                    
                  </tr>
                </thead>
                <tbody class="cart-items">
                    {{-- populate add order here --}}
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <h5>Total: </h5>
                <h5 class="cart-total-price">₱ 0.00</h5>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-primary btn-block ml-1">Save changes</button>
          <button type="button" class="btn btn-secondary btn-block ml-1" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
          
    </div>
</div>

  
  <script>

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
 var btns = btnContainer.getElementById("show_all");
 for (var i = 0; i < btns.length; i++) {
   btns[i].addEventListener("click", function(){
     var current = document.getElementsByClassName("active");
     current[0].className = current[0].className.replace(" active", "");
     this.className += " active";
   });
 }


     window.addEventListener("load", () => {
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
  });
  </script>
@endsection

{{-- <input type="button" value="-" class="minus"><input type="number" id="cart-quantity-input1" step="1" min="1" max="" name="cart-price-input" value="1" title="Qty" class="input-text qty text"><input type="button" value="+" class="plus"> --}}
