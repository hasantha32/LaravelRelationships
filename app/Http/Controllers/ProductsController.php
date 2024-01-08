<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\Photos;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function save(ProductsRequest $request)
    {
        $items = new Products();
        $items->name = $request->name;
        $items->price = $request->price;
        $items->quantity = $request->quantity;
        $items->save();

        $imageName = $request->image->getClientOriginalName();

        //store the photo in project folder
        $request->image->move(public_path('images'),$imageName);

        //save photo in the db
        $photos = new Photos();
        $photos->path = 'image/' .$imageName;
        $photos->product_id = $items->id;
        $photos->save();
     }
}
