@extends('layouts.adminLayout.admin_design') @section('content')
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="#">Stock Manage</a>  <a href="#" class="current">Edit Category</a> 
		</div>
		<h1>Categories</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
						<h5>Edit Category</h5>
					</div>
					<div class="widget-content nopadding">
						<form class="form-horizontal" method="post" action="{{ url('/admin/edit-stock-category/'.$categoryDetails->id) }}" name="edit_category" id="edit_category" novalidate="novalidate" enctype="multipart/form-data">{{ csrf_field() }}
							<div class="control-group">
								<label class="control-label">Category Name :</label>
								<div class="controls">
									<input type="text" name="category_name" id="category_name" value="{{ $categoryDetails->name }}" required="true">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Category Level :</label>
								<div class="controls">
									<select name="parent_id" style="width: 220px;">
										<option value="0">Main Category</option>
										@foreach($levels as $val)
										<option value="{{ $val->id }}" @if($val->id == $categoryDetails->parent_id) selected @endif>{{ $val->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="control-group">
								<div class="form-actions" style="float: right;">
									<input type="submit" value="Update Category" class="btn btn-success">
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