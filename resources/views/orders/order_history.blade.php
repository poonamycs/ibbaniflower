@extends('layouts.adminLayout.admin_design')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Customers</a> <a href="#" class="current">View Customers</a> </div>
    <h1>Customers Section</h1>

    @if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>{!! session('flash_message_error') !!}</strong>
    </div>
    @endif

    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>{!! session('flash_message_success') !!}</strong>
    </div>
    @endif
  </div>

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>All Customers</h5>
            <a href="{{ url('/admin/export-users/') }}"><button style="float: right; margin: 3px 3px;" class="btn btn-primary btn-xs">Export</button></a>
            <a href="{{ url('/admin/view-users-charts/') }}"><button style="float: right; margin: 3px 3px;" class="btn btn-info btn-xs">Chart</button></a>
          </div>
          <div class="widget-content nopadding table table-responsive">
            <table class="table table-bordered data-table table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Status</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>A\C Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($users as $user)
                <tr class="gradeX">
                  <td><span style="display: none;">{{ $loop->index+1 }}</span>{{ $user->id }}</td>
                  <td style="text-align: center;">
                    @if($user->isOnline())
                      <li class="text-success" style="color: green"></li>
                    @else
                      <li class="text-danger" style="color: red"></li>
                    @endif
                  </td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->mobile }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->address }}</td>
                 
                  <td><a href="{{ url('/admin/view-order-history/'.$user->email) }}" class="btn btn-primary btn-mini">History</a></td>
                </tr>

                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

