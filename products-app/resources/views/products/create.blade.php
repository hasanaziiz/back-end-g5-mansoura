@extends('layout.app')

@section('content')

<div class="breadcrumb">
    <div class="breadcrumb-item">
        <a href="{{route('products.index')}}">products</a>
        <a>Create product</a>
    </div>
</div>
<div class="container">
    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <h2>Product Details</h2>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="productName">product name</label>
                <input type="text" class="form-control" name="name" id="productName" placeholder="Enter product name">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="productDescription">product description</label>
                <textarea class="form-control" name="description" id="productDescription" rows="3"></textarea>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-12">
                <label for="productImages">product Image</label>
                <input class="form-control" name="image" type="file" id="productImage">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="productPrice">Product Price</label>
                <input type="number" class="form-control" name="price" id="productPrice" placeholder="Enter product price">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="productInstructor">Product instructor</label>
                <input type="text" class="form-control" name="category" id="productInstructor" placeholder="Enter product category">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Save</button>



    </form>
</div>


@endsection('content')