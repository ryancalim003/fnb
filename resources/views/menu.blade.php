@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6 card shadow-sm rounded">
            <div class="card-body" style="background-color: #bbffbfb4">
                <div style="">
                    <h5 class="text-left" style="font-size: 23px">My Order</h5>
                </div>
            </div>
            <h5 class="text-center mb-5 mt-3">ADD MENU</h5>
            <form>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="menuName" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                    </div>

                    <div class="col">
                        <label for="menuCategory" class="form-label">Categories</label>
                        <select class="form-select" id="category">
                            <option disabled selected>Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div class="col">
                        <label for="menuCategory" class="form-label">Location</label>
                        <select class="form-select" id="category">
                            <option disabled selected>Location</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <label for="menuName" class="form-label">Price</label>
                            <input type="number" class="form-control" placeholder="Price" name="price">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="menuName" class="form-label">Image</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>

@endsection