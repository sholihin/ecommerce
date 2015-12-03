@extends('admin.layout.master')

@section('title', 'Orders')

@section('content')

<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Messages</td>
        <td>Date</td>
    </tr>
    foreach ($users as $user) {
        echo $user->name;
    }
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Messages</td>
        <td>Date</td>
    </tr>
</table>

@endsection