<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        $productCode = Product::limit(1)->orderBy('product_code', 'decs')->first();

        $crop=substr($productCode->product_code, 4);

        if ($crop==0){
            $urutan="JOR0001";
        } elseif ($crop < 9){
            $plus=$crop+1;
            $urutan="JOR00".$plus;
        } elseif ($crop < 99){
            $plus=$crop+1;
            $urutan="JOR0".$plus;
        } elseif ($crop < 999){
            $plus=$crop+1;
            $urutan="JOR".$plus;
        } elseif ($crop >= 999){
            $urutan="ERROR";
        }
        return view('admin.product')->withProducts($products)->withUrutans($urutan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
            
            // $rules = array(
            //     'file' => 'image|max:3000',
            // );
        
            // PASS THE INPUT AND RULES INTO THE VALIDATOR
            // $validation = Validator::make($input, $rules);
     
            // CHECK GIVEN DATA IS VALID OR NOT 
            // if ($validation->fails()) {
            //     return Redirect::to('/')->with('message', $validation->errors->first());
            // }
            
        $file = $request->file('filename');
        $file->move(public_path('backend/attachment'), $file->getClientOriginalName());

        $input['filename'] = $file->getClientOriginalName();
        $save = Product::create($input);    
        $request->session()->flash('flash_message', 'Product successfully added!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        $request->session()->flash('flash_message', 'Task successfully deleted!');
        return redirect()->back();
    }
}
