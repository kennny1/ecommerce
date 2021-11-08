<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data = new product;
        if($request->hasFile('image')){
            $image = $request->file('name');
            $ext = $image->getClientOriginalExtension();
            $imagename = time(). '.' .$ext;
            $image->move('productimage', $imagename);
            $data->image = $imagename;
        }
//        $image = $request->file;
//        $imagename = time().'.'.$image->getClientOriginalExtension();
//        $request->file->move('productimage',$imagename);
        $data->image= $request->input('imagename');
        $data->title= $request->input('title');
        $data->description= $request->input('des');
        $data->quantity= $request->input('quantity');
        $data->save();

        return redirect()->back()->with('message','Product Added Successfully');

    }


}
