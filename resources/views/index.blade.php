@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row bg-light">
          <div class="col-sm-12" style="padding:10px">
              
              <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="padding-left: 0px; margin-bottom:20px">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav" style="overflow: auto;">
                    <ul class="navbar-nav">
                      <li class="nav-item" style="padding-right: 10px">
                          <button type="button" class="btn btn-outline-success rounded-pill" style="" >Starters</button>
                      </li>
                      <li class="nav-item" style="padding-right: 10px">
                          <button type="button" class="btn btn-outline-success rounded-pill" style="width: auto" >Free and Organic</button>
                      </li>
                      
                    </ul>
                  </div>
                </nav>

              <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                      <div class="card shadow-sm bg-white rounded " >
                          <img src=" https://media-cldnry.s-nbcnews.com/image/upload/newscms/2019_21/2870431/190524-classic-american-cheeseburger-ew-207p.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <div class="d-flex justify-content-between">
                                  <h5 class="card-title">Food</h5>
                                  <span>$180.00</span>
                              </div>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <button class="btn btn-primary" type="submit">Order</button>
                          <div class="quantity buttons_added">
                              <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                          </div>
                          </div>
                      </div>
                  </div>

                  <div class="col">
                      <div class="card shadow-sm bg-white rounded " >
                          <img src=" https://media-cldnry.s-nbcnews.com/image/upload/newscms/2019_21/2870431/190524-classic-american-cheeseburger-ew-207p.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <div class="d-flex justify-content-between">
                                  <h5 class="card-title">Food</h5>
                                  <span>$180.00</span>
                              </div>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <button class="btn btn-primary" type="submit">Order</button>
                          <div class="quantity buttons_added">
                              <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                          </div>
                          </div>
                      </div>
                  </div>

                  <div class="col">
                      <div class="card shadow-sm bg-white rounded">
                          <img src=" https://media-cldnry.s-nbcnews.com/image/upload/newscms/2019_21/2870431/190524-classic-american-cheeseburger-ew-207p.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <div class="d-flex justify-content-between">
                                  <h5 class="card-title">Food</h5>
                                  <span>$180.00</span>
                              </div>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <button class="btn btn-primary" type="submit">Order</button>
                          <div class="quantity buttons_added">
                              <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                          </div>
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-success rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Food Cart
    </button>
  
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
                    <th scope="col">Subtotal</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </td>
                      <th scope="row"><img src="https://media-cldnry.s-nbcnews.com/image/upload/newscms/2019_21/2870431/190524-classic-american-cheeseburger-ew-207p.jpg" class="card-img-left" alt="..." style="width: 50px; height:30px; "> 
                      </th>
                        <td>Food</td>
                        <td>$180.00</td>
                        <td>
                            <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </td>
                        <td>$180.00</td>

                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </td>
                        <th scope="row"><img src="https://media-cldnry.s-nbcnews.com/image/upload/newscms/2019_21/2870431/190524-classic-american-cheeseburger-ew-207p.jpg" class="card-img-left" alt="..." style="width: 50px; height:30px; "> 
                        </th>
                        <td>Food</td>
                        <td>$180.00</td>
                        <td>
                            <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </td>
                        <td>$180.00</td>
                    </tr>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <h5>Total: </h5>
                <h5>150.00</h5>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-primary btn-block ml-1">Save changes</button>
          <button type="button" class="btn btn-secondary btn-block ml-1" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
          <div class="col-sm-3" style="padding:10px">
              <div class="container card-body " style="background-color: #bbffbfb4">
                  <div>
                      <h5 class="text-left" style="font-size: 23px">My Order</h5>
                      <span style="font-size: 9pt">Total Order:</span>
                  </div>
              </div>

              <div class="card-body bg-white">

                <div class="card" style="border-left:none;border-right:none;">
                      <div class="card-body d-flex justify-content-between">
                          <img src="https://media-cldnry.s-nbcnews.com/image/upload/newscms/2019_21/2870431/190524-classic-american-cheeseburger-ew-207p.jpg" class="card-img-left" alt="..." style="width: 50px; height:30px; "> 
                          <span class="card-title" style="padding-left:10px">Food Salad Ass</span>
                              <span class="">$180.00</span>
                      </div>
                </div>
              </div>

              <div class="container card-body shadow-sm" style="background-color: #ffffffb4">
                  <div style="padding:0px">
                      <div class="d-flex justify-content-between">
                          <p class="card-title">Total</p>
                          <span>$180.00</span>
                      </div>
                  </div>
              </div>
          </div>
    </div>
</div>
@endsection