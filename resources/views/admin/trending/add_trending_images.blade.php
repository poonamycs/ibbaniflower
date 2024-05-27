@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Product Images</a> <a href="#" class="current">Add Product Images</a> </div>
    <button class="btn btn-success btn-sm" onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>

    <h1>Product Image Section</h1>
    @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif   
    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif   
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Product Images</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-trending-product/') }}" name="add_image" id="add_image" novalidate="novalidate"> {{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Name :</label>
                <input type="text" name="name" id="name" class="span7">
              </div>
              
              <div class="control-group">
                <label class="control-label">Alternate Images :</label>
                <div class="controls">
                  <input type="file" name="image[]" id="image" multiple="multiple" required>
                </div>
                <div class="alert alert-success"><strong>Note: </strong> You can add multiple images of a Product.</div>
              </div> 
              <div class="control-group">         
              <div class="form-actions" style="float: right;">
                <input type="submit" value="Add Images" class="btn btn-success">
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Images</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <!-- <th>Image ID</th> -->
                  <th>Product Name</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productImages as $image)
                <tr class="gradeX">
                  <!-- <td style="text-align:center;">{{ $image->id }}</td> -->
                  <td style="text-align:center;">{{ $image->name }}</td>
                  <td style="text-align:center;"><img width=100px src="{{ asset('images/backend_images/trending/small/'.$image->image) }}"></td>
                  <td style="text-align: center;">
                    <form action="{{ url('admin/trending-product-approved/'.$image->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="checkbox" class="custom-control-input" name="status" @if($image->status=="1") checked @endif value="1" onchange="javascript:this.form.submit();">
                    </form>
                  </td>
                  <td style="text-align:center;"><a onclick="return confirm('Are you sure you want to delete this Product Image?');" href="{{ url('/admin/delete-trending-image/'.$image->id) }}" class="btn btn-danger btn-mini" title="Delete Product Image">Delete</a></td>
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