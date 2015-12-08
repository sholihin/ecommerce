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
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderModal"><i class="glyphicon glyphicon-plus"></i> Order</button>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Invoice #</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Order Time</th>
                                <th>Action</th>
                                <!-- <th>Amount (Rp)</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Products as $order)
                            <tr>
                                <td>{{ $order->invoice }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <div class="button-group">
                                        <button type="submit" class="btn btn-warning btn-xs">Edit</button>
                                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                    </div>
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

<div class="modal fade" id="orderModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-plus"></i> Order</h4>
      </div>
      <form action="Products" method="post">
      {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="kode" class="form-control">
        </div>
        <div class="form-group">
            <label>Customer</label>
            <input type="text" name="customer" class="form-control">
        </div>
        <div class="form-group">
            <label>Qty</label>
            <input type="text" name="qty" class="form-control">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input type="text" name="total" class="form-control">
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
@endsection