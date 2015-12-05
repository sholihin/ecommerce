@extends('admin.layout.master')

@section('title', 'Reviews')

@section('breadcrumb')
<li>
	<a href="dashboard">
    	<i class="fa fa-dashboard"></i> Dashboard
    </a>
</li>
<li class="active">
    <i class="fa fa-fw fa-comments"></i> Reviews
</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
            </div>
            <div class="panel-body">
                <div id="morris-area-chart"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Donut</h3>
            </div>
            <div class="panel-body">
                <div id="morris-donut-chart"></div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection