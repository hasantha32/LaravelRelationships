@extends('layouts.master')
@section('content')
    <div class= "card">
        <div class = "card-body">
{{--            <form method="post" action="save-products" enctype="multipart/form-data">--}}
            <form method="post" action="{{URL('update')}} " enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="number" value="{{$item->id}}" name="id" hidden readonly />
                <div class="row">
                    <div class="col-md-3">
                        <label for="name">Name</label>
                        <input type="text" value="{{$item->name}}" name="name" id="name" class="form-control" />
                    </div>
                    <div class="col-md-3">
                        <label for="price">Price</label>
                        <input type="number" value="{{$item->price}}" name="price" id="price" class="form-control" />
                    </div>
                    <div class="col-md-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" value="{{$item->quantity}}" name="quantity" id="quantity" class="form-control" />
                    </div>
                    <div class="col-md-3">
                        <label for="image">Image</label>
                        <input type="file" accept="image/*" name="image" id="image" />
                    </div>
                    <div class="col-md-3">
                        <input type="submit" value="Submit" class="btn btn-success" />
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


