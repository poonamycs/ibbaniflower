@extends('layouts/FrontLayout/front_design')
@section('content')
	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Orders</li>
				</ol>
			</div>
		</div>
	</section>

	<section id="do_action">
		<div class="container">
			<div class="heading" align="center">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Ordered Products</th>
                <th>Payment Method</th>
                <th>Total</th>
                <th>Ordered On</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>
                	@foreach($order->orders as $pro)
                	{{ $pro->product_code }}
                	@endforeach
                </td>
                <td>{{ $order->payment_method }}</td>
                <td>{{ $order->grand_total }}</td>
                <td>{{ $order->created_at }}</td>
                <td>View Details</td>
            </tr>
            @endforeach
        </tbody>
    </table>
			</div>
		</div>
	</section>

@endsection

<?php 
Session::forget('grand_total');
Session::forget('order_id');
 ?>