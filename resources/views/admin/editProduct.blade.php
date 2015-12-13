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

<!-- /.row -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="glyphicon glyphicon-list"></i> Edit Product</h4>
      </div>
      <form action="/admin/products/{{ $products->id }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="modal-body">
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="product_code" value="{{ $products->product_code }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="product_name" value="{{ $products->product_name }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Purchase</label>
            <input type="numeric" name="purchase_price" value="{{ $products->purchase_price }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Selling</label>
            <input type="numeric" name="selling_price" value="{{ $products->selling_price }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"> {{ $products->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Display</label>
            <img class="form-control" src="{{ asset('backend/attachment') }}/{{ $products->filename }}" style="width:100px;height:auto;">
            <input type="file" name="filename" value="{{ $products->filename }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="numeric" name="stock" value="{{ $products->stock }}" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <a href="/admin/products"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></a>
        <button type="submit" class="btn btn-warning">Save Changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
@endsection
