@extends('layouts.master')

@section('content')
<!-- (A) SEARCH BOX -->
<input type="text" id="the-filter" placeholder="Search For..."/>
 
<!-- (B) LIST OF ITEMS -->

<div class="row row-cols-1 row-cols-md-3 g-4" id="data-output">
   {{-- Add to cart function --}}
   <div class="col" id="">
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
   <div class="col" id="">
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
   <div class="col" id="">
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


<style>

#data-output div.hide { display: none; }
</style>

<script>
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