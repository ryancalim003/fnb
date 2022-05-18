<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F&B food Menu</title>

<style>

/* -- quantity box -- */
.quantity {

 display: inline-block;
float: right;
 }

.quantity .input-text.qty {
 width: 35px;
 height: 39px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
}

.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 7px 10px 8px;
 height: 41px;
 background-color: #ffffff;
 border: 1px solid #efefef;
 cursor:pointer;}

.quantity.buttons_added .minus {
 border-right: 0; }

.quantity.buttons_added .plus {
 border-left: 0; }

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
 background: #eeeeee; }

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }
 
 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }

::-webkit-scrollbar {
  width: 1px;
  }
</style>

</head>

<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
     

      <div class="container-fluid">
          <div class="row bg-light">
                <div class="col-sm-9" style="padding:10px">
                    
                    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="padding-left: 0px; margin-bottom:20px">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav" style="overflow: auto;">
                          <ul class="navbar-nav">
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Starters</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Salad</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Starters</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Salad</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li> <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Starters</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Salad</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
                            </li>
                            <li class="nav-item" style="padding-right: 10px">
                                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 130px" >Success</button>
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

                <div class="col-sm-3" style="padding:10px">
                    <div class="container card-body " style="background-color: #bbffbfb4">
                        <div style="padding:0px">
                            <h5 class="text-left" style="font-size: 23px">My Order</h5>
                            <span style="font-size: 9pt">Total Order:</span>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="card-body">
                            
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

    <script>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    @yield('content')
</body>

</html>