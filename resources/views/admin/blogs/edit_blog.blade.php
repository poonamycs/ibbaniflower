@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Blog</a> <a href="#" class="current">Edit Blog</a> </div>
    <h1>Blog Section</h1>
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
            <h5>Edit Blog</h5>
          </div>
          <?php $pid = Crypt::encrypt($blog->id); ?>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-blog/'.$pid) }}" name="edit_blog" id="edit_blog" novalidate="novalidate"> 
              {{ csrf_field() }}
              
              <div class="control-group">
                <label class="control-label">Name : </label>
                <div class="controls">
                  <input type="text" name="name" id="name" value="{{ $blog->name }}" style="width: 65%">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description : </label>
                <div class="controls">
                  <textarea name="content" id="description" class="textarea_editor" rows="8" style="width: 65%">{{ $blog->content }}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image : </label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                  
                  @if(!empty($blog->image))
                  <input type="hidden" name="current_image" value="{{ $blog->image }}"> 
                  @endif
                  
                  @if(!empty($blog->image))
                  <a href="{{ asset('images/backend_images/blogs/large/'.$blog->image) }}"><img style="height: 50px;" src="{{ asset('images/backend_images/blogs/small/'.$blog->image) }}"></a> | <a href="{{ url('admin/delete-blog-image/'.$blog->id) }}">Delete</a>
                  @endif
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Publish / Enable : </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" @if($blog->status=="1") checked @endif value="1">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="alert alert-info">Click the checkbox to publish product on website.</span>
                </div>
              </div>
              <div class="control-group">
                <div class="form-actions" style="float: right;">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update Blog</button>
                </div>
              <div class="control-group">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection