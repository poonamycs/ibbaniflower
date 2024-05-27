@extends('layouts.adminLayout.admin_design') 
@section('content')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  
            <a href="#">Brands</a>  <a href="#" class="current">Add Brand</a> 
        </div>
        <h1>Brands</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Brand</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="{{ url('/admin/add-brand') }}" name="add_brand" id="add_brand" novalidate="novalidate" enctype="multipart/form-data">{{ csrf_field() }}
                            <div class="control-group">
                                <label class="control-label">Brand Name :</label>
                                <div class="controls">
                                    <input type="text" name="brand_name" id="brand_name" style="width: 65%" required="true">
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Image :</label>
                                <div class="controls">
                                    <input type="file" name="image" id="image">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-actions" style="float: right;">
                                    <button type="reset" class="btn btn-default"> Reset</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add Brand</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>@endsection