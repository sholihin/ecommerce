<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Product;
use App\TmpOrder;
use App\Order;
use App\DetailOrder;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $iduser = Auth::user();
            $products = Product::all();
            $orders = TmpOrder::where('customer_id', $iduser->id)->get();
            $total = $orders->sum('subtotal');
            return view('app')->withProducts($products)->withOrders($orders)->withTotal($total);
            // return $total;
        }else {
            $products = Product::all();
            return view('app')->withProducts($products);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        DB::table('messages')->insert([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'messages' => $_POST['message']
        ]);

        return redirect('/')->with('message', 'success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if(Auth::check()){
            $input = $request->all();
            $produk = Product::findOrFail($id);
            $input['product_code'] = $produk->product_code;
            $input['product_name'] = $produk->product_name;
            $input['customer_id'] = Auth::user()->id;
            $input['price'] = $produk->selling_price;
            $input['qty'] = 1;
            $input['subtotal'] = $produk->selling_price;
            $save = TmpOrder::create($input);
            return redirect('/#produk');
        }else {
            return redirect('/#daftar');
        }
    }

    public function purchase(Request $request)
    {
        if(Auth::check()){
            $input = $request->all();

            $invoiceCode = Order::limit(1)->orderBy('invoice', 'decs')->first();
            if(isset($invoiceCode->invoice)){
              $crop=substr($invoiceCode->invoice, 4);

              if ($crop < 9){
                  $plus=$crop+1;
                  $urutan="INV000".$plus;
              } elseif ($crop < 99){
                  $plus=$crop+1;
                  $urutan="INV00".$plus;
              } elseif ($crop < 999){
                  $plus=$crop+1;
                  $urutan="INV0".$plus;
              } elseif ($crop < 9999){
                  $plus=$crop+1;
                  $urutan="INV".$plus;
              } elseif ($crop >= 9999){
                  $urutan="ERROR";
              }
            }else {
              $urutan="INV0001";
            }

            $tmpOrder = TmpOrder::where('customer_id', Auth::user()->id)->get();
            $input['invoice'] = $urutan;
            $input['subtotal'] = $tmpOrder->sum('subtotal');
            $save = Order::create($input);
            foreach($tmpOrder as $dOrder){
              $saveOrder = new DetailOrder;
              $saveOrder->invoice_code = $urutan;
              $saveOrder->product_code = $dOrder->product_code;
              $saveOrder->product_name = $dOrder->product_name;
              $saveOrder->customer_id = Auth::user()->id;
              $saveOrder->price = $dOrder->price;
              $saveOrder->qty = $dOrder->qty;
              $saveOrder->subtotal = $dOrder->subtotal;
              $saveOrder->save();
              $stok = Product::where('product_code', $dOrder->product_code)->first();
              $stok->stock = $stok->stock - $dOrder->qty;
              $stok->save();
            }
            TmpOrder::where('customer_id', Auth::user()->id)->delete();
            return response()->json($dOrder);

            // return response()->json(array(Order::order()));
        }else {
            //
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('detail')->withProducts($products);
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
        $input = $request->all();
        $order = TmpOrder::findOrFail($id);
        $produk = Product::where('product_code', $order->product_code)->first();
        if($input['qty'] <= $produk->stock){
          $input['subtotal'] = $order->price * $input['qty'];
          $order->fill($input)->save();
          $request->session()->flash('tmp_status', 'Jumlah barang berhasil di rubah..');
          $request->session()->flash('alert-class', 'alert-success');
          return redirect('/#keranjang');
        }else{
          $request->session()->flash('tmp_status', 'Jumlah barang tidak mencukupi..!!');
          $request->session()->flash('alert-class', 'alert-danger');
          return redirect('/#keranjang');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $order = TmpOrder::findOrFail($id);
      $order->delete();
      $request->session()->flash('tmp_status', 'Order berhasil di hapus..');
      $request->session()->flash('alert-class', 'alert-success');
      return redirect('/#keranjang');
    }
}
