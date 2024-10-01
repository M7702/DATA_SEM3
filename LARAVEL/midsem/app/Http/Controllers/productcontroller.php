<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productdata=product::all();
        
        return view('productlisting',['products'=>$productdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productinsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $productdata=product::create([

          'product_name'=>$request->product_name,
          'product_quantity'=>$request->product_quantity
        ]);
        $productdata=product::all();
        
        return view('productlisting',['products'=>$productdata]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // dd($id);
        $productdata=Product::where('id',$id)->first();
        return view('product_show',['product_show'=> $productdata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productdata=Product::where('id',$id)->first();
        return view('productedit',['product_edit'=> $productdata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // dd($id);
         $product->update([
             'product_name'=>$request->product_name,
             'product_quantity'=>$request->product_quantity
            ]);
            return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_delete=product::find($id);
        $product_delete->delete();
        
        
        $productdata=product::all();
        return view('productlisting',['products'=>$productdata]);
    }
}
