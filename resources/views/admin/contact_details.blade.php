@extends('layouts.adminLayout.admin_design')
@section('content')
<style>
  .error{
			color:red;
		}
</style>
<div id="content">

  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard/') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Contact Details</a> <a href="#" class="current">Edit Contact Details</a> </div>
    <h1>Contact Details Section</h1>
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
            <h5>Edit Details</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" id="contcatForm" action="{{ url('/admin/edit-contact-details/'.$contactDetails->id) }}" novalidate="novalidate"> {{ csrf_field() }}
              
              <div class="control-group">
                <label class="control-label">Address :</label>
                <div class="controls">
                  <textarea type="text" name="address" id="address" style="width: 65%" rows="2">{{ $contactDetails->address }}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                  <input type="text" name="phone" id="phone" value="{{ $contactDetails->phone }}" style="width: 65%" maxlength="10" minlength="10" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input type="email" name="email" id="email" value="{{ $contactDetails->email }}" style="width: 65%" required>
                </div>
              </div>

              <div class="control-group">
                <div class="form-actions" style="float: right;">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update Details</button>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
      
        <script>
        
          $(document).ready(function () {
            
            jQuery.validator.addMethod("emailcheck", function(value, element) {
                return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
            }, "Please enter a valid email address.");
        
            $("#contcatForm").validate({
                rules:{
                    email:{
                        required:true,
                        email: true,
                    },
                    
                    phone:{
                        required:true,
                        number:true,
                    },
                   
                },
                messages:{
                    email:{ 
                        email: "Please enter valid email",
                        required: "Please enter your email",
                    },
                   
                    phone:{ 
                        required: "Please enter your name",
                        number: "Please enter numbers only",
                    },     
                },
               highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                    // $(element).removeClass("error");
                },
                submitHandler: function(form) {
                    // $("#contcatForm").attr("disabled", true);
                    form.submit();
                }
            });
        });
        </script>