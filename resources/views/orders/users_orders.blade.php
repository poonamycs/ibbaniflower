@extends('layouts/frontLayout/front_design')
@section('content')

<style>
    .badge {
        border-radius: 2px;
        font-weight: 600;
        padding: 0.75em .8em;
    }
</style>

<section class="account-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-12 mx-auto">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        @include('layouts/frontLayout/user_settings_sidebar')
                    </div>
                    <div class="col-md-8">
                        <div class="card card-body account-right">
                            <div class="widget">
                                <div class="section-header">
                                    <h5 class="heading-design-h5">My Orders List</h5>
                                </div><hr>
                                @if(count($orders) > 0)
                                <div class="order-list-tabel-main table-responsive">
                                    <table class="datatabel table table-striped table-bordered order-list-tabel" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Order ID#</th>
                                                <th>Ordered Products</th>
                                                <th>Date Purchased</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            
                                                <tr>
                                                    <td><span style="display: none;">{{ $loop->index+1 }}</span>#{{ $order->id }}</td>
                                                    <td>@foreach($order->orders as $pro)
                                                        {{ $pro->product_code }},
                                                        @endforeach
                                                    </td>
                                                    <td><?php echo date('M d, Y',strtotime($order->created_at)); ?></td>
                                                    <td align="center"><span class="badge 
                                                        @if($order->order_status=='New') badge-secondary 
                                                        @elseif($order->order_status=='Pending') badge-dark 
                                                        @elseif($order->order_status=='In Process') badge-info 
                                                        @elseif($order->order_status=='Shipped') badge-primary 
                                                        @elseif($order->order_status=='Delivered') badge-warning 
                                                        @elseif($order->order_status=='Paid') badge-success 
                                                        @elseif($order->order_status=='Cancelled') badge-danger
                                                        @elseif($order->order_status=='Return') badge-default
                                                        @endif">{{ $order->order_status }}</span>
                                                    </td>
                                                    <td>₹ {{ $order->grand_total }}</td>
                                                    <td align="center">
                                                        <a data-toggle="tooltip" data-placement="top" href="{{ url('orders/'.$order->id) }}" data-original-title="View Details" class="btn btn-info btn-sm d-inline-flex"><i class="mdi mdi-alert-circle-outline"></i> <strong>View</strong>
                                                        </a>
                                                    </td>
                                                </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <div class="container">
                                    <p class="saved-message mb-2"><b>You don't have any orders yet.</b></p>
                                    <center><a href="{{ url('products/') }}" class="btn btn-success btn-lg"> Continue Shopping <i class="fa fa-angle-right"></i></a></center>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection