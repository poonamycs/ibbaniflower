@extends('layouts.adminLayout.admin_design')
@section('content')

<style>
  td{
    text-align: center !important;
  }
</style>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">View Products</a> </div>
    <h1>Products Section</h1>

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
            <h5>All Products</h5>
            <a href="{{ url('/admin/add-blog') }}"><button style="float: right; margin: 3px 3px;" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Blog</button></a>
          </div>
          <div class="widget-content nopadding table table-responsive">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>

                <?php $i=0 ?>
                @foreach($blogs as $blog)
                <tr class="gradeX">
                    <td class="text-center">{{ $loop->index+1 }}</td>
                    <td class="text-center">{{ $blog->name }}</td>
                    <td>{{ Str::limit($blog->content, 25) }}</td>
                    <td class="text-center">
                        @if(!empty($blog->image))
                        <img src="{{ asset('/images/backend_images/blogs/small/'.$blog->image) }}" style="height: 40px;">
                        @endif
                    </td>
                    <td style="text-align: center;">
                    <form action="{{ url('admin/blog-approved/'.$blog->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="checkbox" class="custom-control-input" name="status" @if($blog->status=="1") checked @endif value="1" onchange="javascript:this.form.submit();">
                    </form>
                    </td>

                    <td class="text-center">
                        <a href="#myModal{{ $blog->id }}" data-toggle="modal" class="btn btn-success" title="View Blog"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('/admin/edit-blog/'.encrypt($blog->id)) }}" class="btn btn-primary" title="Edit Blog"><i class="fa fa-pencil-square-o"></i></a>
                        <!-- <a href="{{ url('/admin/add-images/'.$blog->id) }}" class="btn btn-warning" title="Add Images"><i class="fa fa-picture-o"></i></a> -->
                        <a rel="{{ encrypt($blog->id) }}" rel1="delete-blog" href="javascript:" class="btn btn-danger deleteProduct" title="Delete blog"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <div id="myModal{{ $blog->id }}" class="modal hide">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">×</button>
                        <h3>"{{ $blog->name }}" &nbsp;Full Details</h3>
                    </div>
                    <div class="modal-body">
                        <p><b>Blog ID :</b> {{ $blog->id }}</p>
                        <p><b>Blog Status :</b> @if($blog->status==1)<span style="color: green; font-weight: bold;">Active</span>@else<span style="color: red; font-weight: bold;">Inactive</span>@endif</p>
                        <p><b>Name :</b> {{ $blog->name }}</p>
                        <p><b>Description :</b> <?php echo nl2br($blog->content) ?></p>
                        <p><b>Created On :</b> {{ date('d M Y | h:i a', strtotime($blog->created_at)) }}</p>
                        <p><b>Updated On :</b> {{ date('d M Y | h:i a', strtotime($blog->updated_at)) }}</p>
                        <p><b>Blog Image: </b></p>
                        <center><img src="{{ asset('/images/backend_images/blogs/small/'.$blog->image) }}"></center>
                    </div>
                </div>
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

