$(document).ready(function(){
  'use trick'
	$('.input-number-increment').on("click",function() {

  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  var y =  parseFloat($(".total-prince").html());
  var incy = parseFloat($(".productprice").val()); 
  $(".total-prince").text(parseFloat(y += incy).toFixed(1));
  $input.val(val + 1);
  // $("span.input-number-increment").css("pointer-events", "none");
});

$('.input-number-decrement').on("click",function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var min = $(".input-number").attr("min");
  var val = parseInt($input.val(), 10);
   var y =  parseFloat($(".total-prince").html());
  var incy = parseFloat($(".productprice").val()); 
if( val > min ){
 $(".total-prince").text(parseFloat(y -= incy).toFixed(1));
  $input.val(val - 1);
}
});
});