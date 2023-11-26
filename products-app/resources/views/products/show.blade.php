@extends('layout.app')

@section('content')
<div class="breadcrumb">
    <div class="breadcrumb-item">
        <a href="{{route('products.index')}}">Products</a>
        <a>{{$product->name}}</a>
    </div>
</div>
<div class="container">

    <div class="card ">
       
        <div class="card-body d-flex">
            <div class="row col-4">
                <img src="{{asset('storage/'.$product->image)}}" width="200" >
            </div>
            <div>

                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">{{$product->price}} $</p>
                <p class="card-text">Category:  {{$product->category}}</p>
                <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
        
    </div>
</div>

@endsection('content')