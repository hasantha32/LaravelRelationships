<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\Photos;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //
    public function save(ProductsRequest $request)
    {
        try {
            DB::beginTransaction();
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
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
        }
    }
    public function read(){
//        $items = Products::all();
        $items = Products::with('photo')->get();
        return view('pages.read', compact('items'));
    }

    public function edit($id)
    {
        $item = Products::where('id',$id)->first();
        return view('pages.editView', compact('item'));
    }

    public function update(Request $request)
    {
        $items = Products::where('id', $request->id)->first();
        $items->name = $request->price;
        $items->price = $request->price;
        $items->quantity = $request->quantity;
        $items->update();

        return back();
    }
}
