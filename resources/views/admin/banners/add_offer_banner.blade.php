@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Offer Banners</a> <a href="#" class="current">Add Banner</a> </div>
    <h1>Offer Banner Section</h1>
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
            <h5>Add Offer Banner</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-offer-banner') }}" name="add_banner" id="add_banner" novalidate="novalidate"> {{ csrf_field() }}
              
                <div class="control-group">
                    <label class="control-label">Image : </label>
                    <div class="controls">
                        <input type="file" name="image" id="image" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Title : </label>
                    <div class="controls">
                        <input type="text" name="title" id="title" style="width: 65%" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Link : </label>
                    <div class="controls">
                      <input type="text" name="link" id="link" style="width: 65%">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Enable : </label>
                    <div class="controls">
                      <input type="checkbox" name="status" id="status" class="btn btn-success" value="1">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-actions" style="float: right;">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-success">Add Offer Banner</button>
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