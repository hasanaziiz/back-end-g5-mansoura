@extends('layout.app')
@section('content')
<div class="breadcrumb">
    <div class="breadcrumb-item">
        <a href="/">Home</a>
        <a>products</a>
    </div>
</div>
<div class="container">
    <div class="row d-flex">
        <div class="col-8">
            <h2>products</h2>
        </div>
        <div class="col-4">
            <a href="{{route('products.create')}}" class="btn btn-primary">Create product</a>
        </div>
        <div class="col-4">
            <form action="{{route('products.index')}}" method="GET">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Type word and hit enter">
                </div>
            </form>

        </div>
    </div>
    @if($products->isEmpty())
    <div class="alert alert-warning">
        There are no products.
    </div>
    @else

    <table class="table">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $x => $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{route('products.show',$product->id)}}" title="Show" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{route('products.edit',$product->id)}}" title="Edit" class="btn btn-sm btn-secondary">
                        <i class="fa fa-pencil"></i>
                    </a>


                    <form style="display: unset" action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <div class="pagination justify-content-center">
                        {{$products->links()}}
                    </div>
                </td>
            </tr>

        </tfoot>
    </table>
    @endif
</div>
@endsection('content')