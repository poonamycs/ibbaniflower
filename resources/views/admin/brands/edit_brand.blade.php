@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Brands</a> <a href="#" class="current">Edit Brand</a> </div>
    <h1>Brands</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Brand</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-brand/'.$brand->id) }}" name="edit_brand" id="edit_brand" novalidate="novalidate" enctype="multipart/form-data"> {{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Brand Name :</label>
                <div class="controls">
                  <input type="text" name="brand_name" id="brand_name" value="{{ $brand->name }}">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Image :</label>
                <div class="controls">
                  <input name="image" id="image" type="file" size="19" style="opacity: 0;">

                  @if(!empty($brand->image))
                    <input type="hidden" name="current_image" value="{{ $brand->image }}"> 
                  @endif

                  @if(!empty($brand->image))
                  <img style="height: 50px;" src="{{ asset('images/frontend_images/brand/'.$brand->image) }}">
                  @endif

                </div>
              </div>
              <div class="control-group">
                <div class="form-actions" style="float: right;">
                  <input type="submit" value="Update Brand" class="btn btn-success">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection