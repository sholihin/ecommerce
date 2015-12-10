@extends('admin.layout.master')

@section('title', 'Charts')

@section('breadcrumb')
<li>
    <a href="dashboard">
        <i class="fa fa-dashboard"></i> Dashboard
    </a>
</li>
<li class="active">
    <i class="fa fa-fw fa-line-chart"></i> Charts
</li>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-line-chart fa-fw"></i> Area Chart</h3>
            </div>
            <div class="panel-body">
                <div id="morris-area-chart"></div>
            </div>
        </div>
    </div>
</div>
@endsection