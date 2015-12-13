@extends('admin.layout.master')

@section('title', 'Products')

@section('breadcrumb')
<li>
    <a href="dashboard">
        <i class="fa fa-dashboard"></i> Dashboard
    </a>
</li>
<li class="active">
    <i class="fa fa-fw fa-shopping-cart"></i> Products
</li>
@endsection

@section('content')
<div ng-controller="ProductCtrl">
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal"><i class="glyphicon glyphicon-plus"></i> Product</button>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-fw fa-shopping-cart"></i></i> Prodcut List</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Code #</th>
                                <th>Name</th>
                                <th>Purchase Price</th>
                                <th>Selling Price</th>
                                <th>Stock</th>
                                <th style="text-align:center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->product_code }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>Rp. {{ number_format($product->purchase_price) }}</td>
                                <td>Rp. {{ number_format($product->selling_price) }}</td>
                                <td>{{ $product->stock }}</td>
                                <td style="text-align:center;">
                                    <a href="/admin/products/{{ $product->id }}/edit"><button type="button" class="btn btn-warning btn-xs edit"><i class="fa fa-pencil-square-o"></i> Edit</button></a>
                                    <form action="/admin/products/{{ $product->id }}" method="POST" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</button>
                                    </form>
                                    <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#detailModal"><i class="fa fa-list-ul"></i> Detail</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="modal fade" id="productModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-plus"></i> Product</h4>
      </div>
      <form action="products" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="product_code" value="{{ $urutans }}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="product_name" class="form-control">
        </div>
        <div class="form-group">
            <label>Purchase</label>
            <input type="numeric" name="purchase_price" class="form-control">
        </div>
        <div class="form-group">
            <label>Selling</label>
            <input type="numeric" name="selling_price" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Display</label>
            <input type="file" name="filename" class="form-control">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="numeric" name="stock" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- /.row -->
<div class="modal fade" id="detailModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-list"></i> Detail Product</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="product_code" value="{{ $product->product_code }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>Purchase</label>
            <input type="numeric" name="purchase_price" value="{{ $product->purchase_price }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>Selling</label>
            <input type="numeric" name="selling_price" value="{{ $product->selling_price }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" disabled> {{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Display</label>
            <img class="form-control" src="../backend/attachment/{{ $product->filename }}" style="width:100px;height:auto;">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="numeric" name="stock" value="{{ $product->stock }}" class="form-control" disabled>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- /.row -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-list"></i> Edit Product</h4>
      </div>
      <form action="product/" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="product_code" value="{{ $product->product_code }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Purchase</label>
            <input type="numeric" name="purchase_price" value="{{ $product->purchase_price }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Selling</label>
            <input type="numeric" name="selling_price" value="{{ $product->selling_price }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"> {{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Display</label>
            <img class="form-control" src="../backend/attachment/{{ $product->filename }}" style="width:100px;height:auto;">
            <input type="file" name="filename" value="{{ $product->filename }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="numeric" name="stock" value="{{ $product->stock }}" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Save Changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div><!-- end controller -->
@endsection
