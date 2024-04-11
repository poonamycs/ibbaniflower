<div class="shop-filters">
	<div id="accordion">

		<!-- category filter -->
		<!-- <div class="card">
			<div class="card-header" id="headingOne">
				<h5 class="mb-0">
				  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  Category <span class="mdi mdi-chevron-down float-right"></span>
				  </button>
			   </h5>
			</div>
			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body card-shop-filters">
					@foreach($categories as $cat)
					<form action="{{ url('/search/products') }}" method="post">{{ csrf_field() }}
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="{{ $cat->name }}" value="{{ asset('products/'.$cat->url) }}" onclick="location = this.value;">
							<label class="custom-control-label text-capitalize" for="{{ $cat->name }}">{{ $cat->name }}</label>
						</div>
					</form>
					@endforeach
				</div>
			</div>
		</div> -->

		<div class="card">
			<div class="card-header" id="headingOne">
				<h5 class="mb-0">
				  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				  Category <span class="mdi mdi-chevron-down float-right"></span>
				  </button>
			   </h5>
			</div>
			<div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
                    <div class="card">
                       <div class="accordion" id="accordionExample">
                       		@foreach($categories as $cat)
							<div class="card mb-0">
								<a href="#" data-toggle="collapse" data-target="#{{ $cat->url }}" aria-expanded="true" aria-controls="{{ $cat->url }}">
									<div class="card-header" id="headingOne">
								    	<p class="mb-0">								       
									       <i class="icofont icofont-question-square"></i> <b>{{ $cat->name }}</b> <span class="mdi mdi-chevron-right float-right"></span>
									    </p>
									</div>
								</a>
								<div id="{{ $cat->url }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="margin-left: 2%">
								    @foreach($cat->categories as $subcat)
									<?php $productCount = App\Models\Product::productCount($subcat->id); ?>
										@if($subcat->status==1)
										<li><a class="text-capitalize p-2" href="{{ asset('products/'.$subcat->url) }}">{{$subcat->name}} <!-- ({{ $productCount }}) --></a></li>
										@endif
									@endforeach
								</div>
							</div>
							@endforeach
                       	</div>
                    </div>
                </div>
			</div>
		</div>
		
		<form action="{{ url('/products-filter') }}" method="post">{{ csrf_field() }}
			@if(!empty($url))
				<input name="url" value="{{ $url }}" type="hidden">
			@endif

			@if(!empty($url))
				<!-- <div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
						  <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						  Brand <span class="mdi mdi-chevron-down float-right"></span>
						  </button>
					   </h5>
					</div>				
					@if(!empty($_GET['brand']))
						<?php 
							$brandArray = explode('-',$_GET['brand']); 
						?>
					@endif
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body card-shop-filters">						
							@foreach($brandArray as $brand)
							@if(!empty($_GET['brand']))
								<?php $brandArr = explode('-',$_GET['brand']) ?>
								@if(in_array($brand,$brandArr))
									<?php $brandcheck="checked"; ?>
								@else
									<?php $brandcheck=""; ?>
								@endif
							@else
								<?php $brandcheck=""; ?>
							@endif
							<div class="custom-control custom-checkbox">
								<input type="checkbox" name="brandFilter[]" id="{{ $brand }}" value="{{ $brand }}" {{ $brandcheck }} onchange="javascript:this.form.submit();" class="custom-control-input">
								<label class="custom-control-label" for="{{ $brand }}">{{ $brand }}</label>
							</div>
							@endforeach
						</div>
					</div>
				</div> -->

				<!-- <div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
						  <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						  Price <span class="mdi mdi-chevron-down float-right"></span>
						  </button>
					   </h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body card-shop-filters">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="1">
								<label class="custom-control-label" for="1">$68 to $659 <span class="badge badge-warning">50% OFF</span>
								</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="2">
								<label class="custom-control-label" for="2">$660 to $1014</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="3">
								<label class="custom-control-label" for="3">$1015 to $1679</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="4">
								<label class="custom-control-label" for="4">$1680 to $1856</label>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
						  <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
						  Imported Fruits <span class="mdi mdi-chevron-down float-right"></span>
						  </button>
					   </h5>
					</div>
					<div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<div class="list-group"> <a href="#" class="list-group-item list-group-item-action">All Fruits</a>
								<a href="#" class="list-group-item list-group-item-action">Imported Fruits</a>
								<a href="#" class="list-group-item list-group-item-action">Seasonal Fruits</a>
								<a href="#" class="list-group-item list-group-item-action">Citrus</a>
								<a href="#" class="list-group-item list-group-item-action disabled">Cut Fresh & Herbs</a>
							</div>
						</div>
					</div>
				</div> -->
			@endif
		</form>
	</div>
</div>
<div class="left-ad mt-4">
	<img class="img-fluid" src="../../254x557.png" alt="">
</div>
