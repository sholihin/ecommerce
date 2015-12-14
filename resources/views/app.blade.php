@extends('layouts.master')
@section('content')
@if(Auth::check())
<!-- Start Belanja -->
<section id="keranjang">
    @if($errors->any())
      <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
      </div>
    @endif
    @if(Session::has('tmp_status'))
        <div class="col-md-6 col-md-offset-3">
          <div class="alert {{ Session::get('alert-class') }}">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              {{ Session::get('tmp_status') }}
          </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              @if(count($orders) > 0)
                <h2 class="section-heading" style="margin-bottom:50px;">Keranjang Belanja</h2>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <td><strong>Kode</strong></td>
                            <td><strong>Nama</strong></td>
                            <td><strong>Harga</strong></td>
                            <td><strong>Jumlah</strong></td>
                            <td><strong>Aksi</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                          <tr>
                              <td width="15%">{{ $order->product_code }}</td>
                              <td width="35%">{{ $order->product_name }}</td>
                              <td width="20%">Rp. {{ number_format($order->price) }}</td>
                              <form action="/product/purchase/{{ $order->id }}/update" method="post">
                              <td width="10%">
                                      {{ csrf_field() }}
                                      {{ method_field('PUT') }}
                                      <input type="text" name="qty" value="{{ $order->qty }}" class="form-control">
                              </td>
                              <td width="20%">
                                <button type="submit" class="btn btn-success">
                                  <i class="fa fa-refresh"></i>
                                </button>
                              </form>
                                <form action="/product/purchase/{{ $order->id }}/delete" method="POST" style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-remove"></i>
                                </form>
                              </td>
                          </tr>
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <td colspan="2"><strong>Total</strong></td>
                            <td><strong>Rp.{{ number_format($total) }}</strong></td>
                            <td colspan="2">
                              <form action="/purchases" method="POST" style="display:inline">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Proses</button>
                              </form>
                            </td>
                        </tr>
                    </thead>
                </table>
              @else
                <h3>Anda belum memiliki daftar belanja..</h3>
              @endif
            </div>
        </div>
    </div>
</section>
<!-- End Belanja -->
@endif
@endsection
