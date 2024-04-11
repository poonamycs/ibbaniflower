@extends('layouts/frontLayout/front_design')
@section('content')
  
<section class="page-header padding-tb page-header-bg-1">
    <div class="container">
        <div class="page-header-item d-flex align-items-center justify-content-center">
            <div class="post-content">
                <h3>Make Payment</h3>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
  <div class="container">
    <div class="heading" align="center">
      <h5>Please make payment with one of the below option.</h5>
      <h6>Your ORDER ID is <b>{{ Session::get('order_id') }}</b> and total payable amount is <b>₹ {{ Session::get('grand_total') }}</b></h6>
    </div><br>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Particular</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">A/C Name</th>
                      <td>Parshuram S. Gunjal</td>
                    </tr>
                    <tr>
                      <th scope="row">Bank Detail</th>
                      <td>Yes Bank, Pimple Saudagar Branch</td>
                    </tr>
                    <tr>
                      <th scope="row">A/C No.</th>
                      <td>046251100000210</td>
                    </tr>
                    <tr>
                      <th scope="row">IFSC</th>
                      <td>YESB0000462</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <p><img src="images/frontend_images/google_pay.png" style="height: 30px;"> &nbsp;&nbsp;Google Pay Number- 9657555777 [ Parshuram Gunjal ]</p>
            </div>
        </div>
  </div>
</section>

@endsection

<?php 
    Session::forget('grand_total');
    Session::forget('order_id');
?>