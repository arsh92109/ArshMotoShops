<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index() {

        $products = Product::all();

        return view ('admin.products.index',compact('products'));
    }

    public function create() {
        return view('admin.products.create');
    }

    public function store(Request $request) {
        
        // Validate the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);
        // Upload the image
            if($request->hasFile('image')) {
                $image = $request->image;
                $image->move('images',$image->getClientOriginalName());
            }
        // Save the data into database
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' => $request->image->getClientOriginalName()
            ]);
        // Session Message
            $request->session()->flash('msg','Your Product is added successfully');

        // Redirect
            return redirect('admin/products/create');
    }

    public function destroy($id) {
        // Delete the product
        product::destroy($id);

        //Store the Message
        session()->flash('msgs','Product has been deleted');

        //Redirect
        return redirect('admin/products');

    }

    public function edit($id) {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product') );
    }

    public function update(Request $request, $id) {
        
        //Find the product
        $product = Product::find($id);

        //Validate the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //Check if there is any image
            if($request->hasfile('image')) {
                // Check if the old image exists inside folder
                if(file_exists(public_path('images/'). $product->image)) {
                    unlink(public_path('images/'). $product->image);
                }
                //Upload the new image
                $image = $request->image;
                $image->move('images', $image->getClientOriginalName());

                $product->image = $request->image->getClientOriginalName();
            }
        //updating the product
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        //store a message in session

        $request->session()->flash('umsg','Product has been updated');
        
        //Redirect
        return redirect('admin/products');
    }

    public function show($id) {
        $product = Product::find($id);
        return view('admin.products.details', compact('product'));
    }
}
