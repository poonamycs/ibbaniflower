						  <form name="addtocartForm" id="addtocartForm" action="#" method="post">
							{{ csrf_field() }}
      						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
      							<h1>{{$product->product_name}}</h1>
								<p class="p1">{{ Str::limit(strip_tags($product->description), 50) }}</p>
								<div class="star">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<span>10 Rating(s) | Add Your Rating</span>
								</div>
								<div class="prince"><span>&#8377;&nbsp;{{$product->price}}</span><s class="strike">&#8377;{{$product->discount}}</s></div>
								
									<div class="Quality">
										
										<div class="input-group input-number-group">
											<span class="text-qua">Quanty:</span>
											  <div class="input-group-button">
											    <span class="input-number-decrement">-</span>
											  </div>
											  <input type="hidden" class="productprice" value="{{ $product->price }}">
											  <input class="input-number" type="number" min="0" max="1000" value="01" >
											  <div class="input-group-button">
											    <span class="input-number-increment">+</span>
											  </div>
											  <span class="dola">&#8377; </span><span class="total-prince">{{$product->price}}</span>
										</div>
										
									</div>
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									<h6><i class="fa fa-shopping-bag"></i> Check product availability in your area</h6>
										<div class="form-inline pincode-search">
											<input type="number" name="pincode" id="chkPincode" class="form-control" name="product" placeholder="Enter your pincode">
											<button type="button" id="checkpin" class="pl-2 pr-2 btn btn-secondary btn-lg" style="padding: 7px; margin: 15px 5px"><i class="fa fa-search"></i>
											</button>
													<div class="form-inline" id="datePopup" style="display:none">
														<input type="date" id="selectedDate" onchange="nextStep('datePopup', 'timeSlotPopup')">
													</div>
											</div>
											<div class="form-inline">
											<div id="timeSlotPopup">
												<div id="selectedSlot1">
												</div>
											</div>

											<div id="deliveryTimePopup" style="display:none">
												<div id="deliveryTimePopup1">
												</div>
											</div>
											</div>
											<div id="confirmation">
												<div id="slotdetails"></div>
											</div>

										<span id="pincodeResponse"></span>

										<hr>
									<!-- <h6><i class="mdi mdi-truck-fast"></i> Order will be delivered between <b><?php echo $datetime->format('d M').' to '.$datetime1->format('d M') ?></b></h6> -->
									<div class="add-cart">
										<a href="#" class="btn-add-cart">Add to cart</a>
										<a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
										<a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
									</div>
      						</div>
						</form>
					
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
<!-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->

<!-- this is remove bcoz of dialog open -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script>
	// $( document ).ready(function() {
		
	// });
	$("#deliveryTimePopup1").change(function() {
		var slot = $("#selectedTime").val();
		if(slot > -1)
		{
			confirmSlot();
		}
	});
	$("#selectedSlot1").change(function() {
		var slot = $("#selectedSlot").val();
		var slottext = $("#selectedSlot").find(":selected").text();

		if(slot > -1)
		{
			$.ajax({
				type:'post',
				data:{slottext:slottext},
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				url:'/check-time-slot',
				success:function(resp){	
					var select = ('<select></select>');
					var option = '<select id = "selectedTime"><option value="-1">Select Time</option>';
					console.log(resp);	
					if(resp){
					for (i = 0; i < resp.length; ++i) {
							option += ('<option value="' + i + '">' + resp[i]['time_slot'] + '</option>');
							console.log(option);
						}
						option += '</select>';						
						$("#deliveryTimePopup1").html(option);
						
					}else{
						
						$("#deliveryTimePopup1").html(select);
					}
				$("#deliveryTimePopup").css({"display":"inline-block"});

				},error:function(){
					alert("Error");
				}
			});
		}
		
	});
	$( document ).ready(function() {
		$("#checkpin").click(function() {
		var pincode = $("#chkPincode").val();
		alert(pincode);
		if(pincode==""){
			alert("Please Enter Pincode"); return false;
		}
			$.ajax({
				type:'post',
				data:{pincode:pincode},
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				url:'/check-pincode',
				success:function(resp){		
					if(resp>0){
						$("#pincodeResponse").html("<font color='green' style='font-size: 13px; font-weight: bold'><i class='fa fa-check'></i> This pincode is available for delivery.</font>");
						$("#datePopup").css({"display":"inline-block"});
					}else{
						$("#pincodeResponse").html("<font color='red' style='font-size: 13px; font-weight: bold'><i class='fa fa-ban'></i> This pincode is not available for delivery.</font>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});
	});
        // Function to proceed to the next step
        function nextStep(currentPopup, nextPopup) {
			if(currentPopup == "datePopup")
			{
				$("#pincodeResponse").hide();
				var shipping_date= $("#selectedDate").val();
				if(shipping_date.length > 0)
				{
					$.ajax({
						type:'post',
						data:{shipping_date:shipping_date},
						headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						url:'/check-shipping-method',
						success:function(resp){	
							var select = ('<select></select>');
    						var option = '<select id = "selectedSlot"><option value="-1">Select Shipping Method</option>';
							console.log(resp);	
							if(resp){
							for (i = 0; i < resp.length; ++i) {
									option += ('<option value="' + i + '">' + resp[i]['name'] + '</option>');
									console.log(option);
								}
								option += '</select>';
								console.log("hi");
								
								$("#selectedSlot1").html(option);
								
							}else{
								console.log("hi1");
								$("#selectedSlot1").html(select);
							}
						},error:function(){
							alert("Error");
						}
					});
				}
			}
            document.getElementById(nextPopup).style.display = 'block';
        }

        function confirmSlot() {
            var date = $('#selectedDate').val();
            var slot = $("#selectedSlot").find(":selected").text();
            var time = $('#selectedTime').find(":selected").text();

           document.getElementById('confirmation').style.display = 'block';

            var slotdetails = document.getElementById('slotdetails');
            slotdetails.innerHTML = '';
            var button = document.createElement('label');
            button.innerText = `Order will be delivered between - ${date}, Slot - ${slot}, Time - ${time}`;
           
            slotdetails.appendChild(button);
        }
		
</script>
