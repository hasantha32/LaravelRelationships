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
                    <th>Action</th>
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
                            <td>
                                <input type="button" class="btn btn-success" value="Update" onclick="edit({{ $item->id}})" />
                                <input type="button" class="btn btn-danger" value="Delete" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Define the edit function
        function edit(id) {
            location.href = "edit/" + id;
        }
        alert("ok")
    </script>
@endsection
