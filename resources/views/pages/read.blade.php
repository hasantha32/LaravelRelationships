@extends('layouts.master')
@section('content')
    <div class= "card">
        <div class = "card-body">
            <table>
                <thead>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Photo</th>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td> {{$item->name }} </td>
                            <td> {{$item->price }} </td>
                            <td> {{$item->quantity }} </td>
                            <td>
                                <img src="{{ URL::asset($item->photo->path) }}" style="width: 25%" alt="img"/>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection


