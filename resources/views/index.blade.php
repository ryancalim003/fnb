@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row bg-light">
          <div class="col-sm-12" style="padding:10px">
              <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="margin-bottom:20px">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item" style="padding-right: 10px">
                          <button type="button" class="btn btn-outline-success rounded-pill"  style="width:10rem" >Starters</button>
                      </li>
                      <li class="nav-item" style="padding-right: 10px">
                          <button type="button" class="btn btn-outline-success rounded-pill" style="width: 10rem" >Free and Organic</button>
                      </li>
                      
                    </ul>
                  </div>
                </nav>

              <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                      <div class="card shadow-sm bg-white rounded " >
                        <img src="/img/1.jpg" class="card-img-top" alt="...">
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
                          <img src="/img/2.jpg" class="card-img-top" alt="...">
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
                          <img src="/img/3.jpg" class="card-img-top responsive" alt="...">
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
          
    </div>
</div>
@endsection