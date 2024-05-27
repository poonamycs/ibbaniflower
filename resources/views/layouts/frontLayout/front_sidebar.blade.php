<style>
	::selection {
  color: #fff;
  background: #17a2b8;
}
.wrapper {
  width: 250px;
  background: #fff;
  border-radius: 10px;
  padding: 20px 25px 40px;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
}
header h2 {
  font-size: 24px;
  font-weight: 600;
}
header p {
  margin-top: 5px;
  font-size: 16px;
}
.price-input {
  width: 100%;
  display: flex;
  margin: 30px 0 35px;
}
.price-input .field {
  display: flex;
  width: 100%;
  height: 45px;
  align-items: center;
}
.field input {
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 19px;
  margin-left: 12px;
  border-radius: 5px;
  text-align: center;
  border: 1px solid #999;
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.price-input .separator {
  width: 130px;
  display: flex;
  font-size: 19px;
  align-items: center;
  justify-content: center;
}
.slider {
  height: 5px;
  position: relative;
  background: #ddd;
  border-radius: 5px;
}
.slider .progress {
  height: 100%;
  left: 25%;
  right: 25%;
  position: absolute;
  border-radius: 5px;
  background: #17a2b8;
}
.range-input {
  position: relative;
}
.range-input input {
  position: absolute;
  width: 100%;
  height: 5px;
  top: -5px;
  background: none;
  pointer-events: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type="range"]::-webkit-slider-thumb {
  height: 17px;
  width: 17px;
  border-radius: 50%;
  background: #17a2b8;
  pointer-events: auto;
  -webkit-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}
input[type="range"]::-moz-range-thumb {
  height: 17px;
  width: 17px;
  border: none;
  border-radius: 50%;
  background: #17a2b8;
  pointer-events: auto;
  -moz-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}

/* Support */
.support-box {
  top: 2rem;
  position: relative;
  bottom: 0;
  text-align: center;
  display: block;
}
.b-btn {
  color: white;
  text-decoration: none;
  font-weight: bold;
}
.b-btn.paypal i {
  color: blue;
}
.b-btn:hover {
  text-decoration: none;
  font-weight: bold;
}
.b-btn i {
  font-size: 20px;
  color: yellow;
  margin-top: 2rem;
}
</style>

<?php use App\Models\Product; ?>
	<div class="collapse navbar-collapse" id="mysidebar">
				<ul class="list-group list-1">
					<li class="list-group-item">CATEGORIES</li>
  					@foreach($categories as $cat)
					<li class="list-group-item">
  						<a href="#">{{$cat->name}}</a><button class="accordion"></button>
						  <?php $subcategories = App\Models\Category::where('status',1)->where('parent_id',$cat->id)->get();?>
							<ul class="panel">
								@foreach($subcategories as $subcat)
						  			<?php $productCount = Product::productCount($subcat->id); ?>
									<li><a href="{{ asset('products/'.$subcat->url) }}">{{$subcat->name}}</a></li>
								@endforeach
							</ul>
  					</li>
					@endforeach
  					
				</ul>
				
				<!-- <ul class="list-group list-3">
					<li class="list-group-item">SIZE OPTIONS</li>
					<li class="list-group-item list-item-3"><a href="#">L</a><span>(15)</span></li>
					<li class="list-group-item list-item-3"><a href="#">M</a><span>(09)</span></li>
					<li class="list-group-item list-item-3"><a href="#">S</a><span>(12)</span></li>
					<li class="list-group-item list-item-3"><a href="#">XL</a><span>(16)</span></li>
				</ul> -->
				<!--  -->
				<!-- <ul class="list-group list-4">
					<li class="list-group-item">
						Price range
					</li>
					<li class="list-group-item list-item-4">
						<div id = "slider-3"></div>
      					<p class="range-p">
         				 <input type = "text" id = "price">
         				 <button>Filter</button>
     					 </p>
     					 <figure class="bg-input"></figure>
					</li>
				</ul> -->
				<?php $minprice = Product::whereNotNull('price')->min("price");
					  $maxprice = Product::whereNotNull('price')->max("price");
					  $maximumprice = $maxprice + 500;
					  $minimumprice = $minprice - 50;
					  $avgprice = Product::whereNotNull('price')->avg("price");
					  $avgprice = round($avgprice, 2);
				?>
				<ul class="list-group list-4">
					<li class="list-group-item">
						Price range
					</li>
					<li class="list-group-item list-item-4">
						<div class="d-flex">
							<div class="wrapper">
					
					<div class="price-input">
						<div class="field">
						<input type="number" class="input-min" value="{{ $minprice }}">
						</div>
						<div class="separator">-</div>
						<div class="field">
						<input type="number" class="input-max" value="{{ $maxprice }}">
						</div>
					</div>
					<div class="slider">
						<div class="progress"></div>
					</div>
					<div class="range-input">
						<input type="range" class="range-min" min="{{ $minimumprice }}" max="{{ $maxprice }}" value="{{ $minprice }}" step="10">
						<input type="range" class="range-max" min="{{ $minimumprice }}" max="{{ $maxprice }}" value="{{ $maxprice }}" step="10">
					</div>
					</div>
					</li>
				</ul>
			</div>
<script>
	const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 10;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 10 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 10 - (maxPrice / rangeInput[1].max) * 10 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 10 + "%";
      range.style.right = 10 - (maxVal / rangeInput[1].max) * 10 + "%";
    }
  });
});
</script>