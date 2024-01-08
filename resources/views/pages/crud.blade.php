@extends('layouts.master')
@section('content')
    <div class= "card">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class = "card-body">
            <form method="post" action="save-products" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label for="name">Name</label>
                        <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" />
                    </div>
                    <div class="col-md-3">
                        <label for="price">Price</label>
                        <input type="number" value="{{old('price')}}" name="price" id="price" class="form-control" />
                    </div>
                    <div class="col-md-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" value="{{old('quantity')}}" name="quantity" id="quantity" class="form-control" />
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

