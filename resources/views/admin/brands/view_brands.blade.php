@extends('layouts.adminLayout.admin_design')
@section('content')

<style>
  td{
    text-align: center !important;
  }
</style>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">View categories</a> </div>
    <h1>Brands</h1>

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
            <h5>All Brands</h5>
            <a href="{{ url('/admin/add-brand') }}"><button style="float: right; margin: 3px 3px;" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Brand</button></a>
          </div>
          <div class="widget-content nopadding table table-responsive">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th style="text-align: left;">Brand Name</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

              	@foreach($brands as $brand)
                <tr class="gradeX">
                  <td>{{ $brand->id }}</td>
                  <td style="text-align: center;">
                    @if(!empty($brand->image))
                    <img src="{{ asset('/images/frontend_images/brand/'.$brand->image) }}" style="height: 50px;">
                    @else
                    <img src="{{ asset('/images/frontend_images/na.png') }}" style="height: 50px;">
                    @endif
                  </td>
                  <td style="text-align: left !important;">{{ $brand->name }}</td>
                  
                  <td class="center">
                    <a href="{{ url('/admin/edit-brand/'.$brand->id) }}" class="btn btn-primary btn-mini" title="Edit Brand">Edit</a>
                    @if(session('adminSession')=='admin@gmail.com')
                    <a rel="{{ $brand->id }}" rel1="delete-brand" href="javascript:" class="btn btn-danger btn-mini deleteBrand" title="Delete Brand">Delete</a>
                    @endif
                  </td>
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

