@extends('layouts.master')
@section('content')
    <div class= "card">
        <div class = "card-body">
            <table>
                <thead>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td> {{$item->name }} </td>
                            <td> {{$item->price }} </td>
                            <td> {{$item->quantity }} </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection


