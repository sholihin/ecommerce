@extends('admin.layout.master')

@section('title', 'Status')

@section('breadcrumb')
<li>
	<a href="dashboard">
    	<i class="fa fa-dashboard"></i> Dashboard
    </a>
</li>
<li class="active">
    <i class="fa fa-fw fa-truck"></i> Status
</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-truck fa-fw"></i> Orders Status</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Order Date</th>
                                <th>Order Time</th>
                                <th>Amount (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3326</td>
                                <td>10/21/2013</td>
                                <td>3:29 PM</td>
                                <td>$321.33</td>
                            </tr>
                            <tr>
                                <td>3325</td>
                                <td>10/21/2013</td>
                                <td>3:20 PM</td>
                                <td>$234.34</td>
                            </tr>
                            <tr>
                                <td>3324</td>
                                <td>10/21/2013</td>
                                <td>3:03 PM</td>
                                <td>$724.17</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="#">View All Status <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection