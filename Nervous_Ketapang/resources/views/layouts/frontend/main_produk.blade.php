<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width,initial-scale=1">
    <title>Product | CM</title>
    <link href="https://i.ibb.co/kQ6x5MY/LOGO.png" rel="shortcut icon">
    <!-- Vendor css -->
    <link href="{{asset('frontend/assets/bootstrap_slim/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/bootstrap_slim/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/slim.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/slim.one.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/scrollbar.css')}}">
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script>
		    $(document).ready(function(){
		    	setInterval(function(){
		    		$("#tayang").load('app/hasil')
		        }, 2000);
			});
		</script>
		<!-- search icon -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/online.css')}}">
        <link rel="stylesheet" href="https://fontawesome.com/v4.7/icon/user">
        <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons/edit">
<!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->


  </head>
  <body class="slim-sticky-header scrollbar scrollbar-near-moon thin">
	  @include('layouts.frontend.partial.header_p')
    <div class="container force-overfow force-overflow">
        @yield('content')
    </div>
    

      @include('layouts.frontend.partial.footer')









    <!-- script -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{asset('frontend/assets/bootstrap_lim/js/chekbox.js')}}"></script>
	
		<script>
			$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
			$("#check-all").click(function(){ // Ketika user men-cek checkbox all
			if($(this).is(":checked")) // Jika checkbox all diceklis
				$(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
			else // Jika checkbox all tidak diceklis
				$(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
			});
			
			$("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
				$("#form-delete").submit(); // Submit form
			});
			});
		</script>
		<script src="{{asset('frontend/assets/bootstrap_slim/lib/jquery/js/jquery.js')}}"></script>
   		<script src="{{asset('frontend/assets/bootstrap_slim/lib/popper.js/js/popper.js')}}"></script>
    	<script src="{{asset('frontend/assets/bootstrap_slim/lib/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('frontend/assets/bootstrap_slim/js/slim.js')}}"></script>
		<!-- <script src="https://venom.my.id/asset/lib/jquery/js/jquery.js"></script>
   		<script src="https://venom.my.id/asset/lib/popper.js/js/popper.js"></script>
    	<script src="https://venom.my.id/asset/lib/bootstrap/js/bootstrap.js"></script>
		<script src="https://venom.my.id/asset/js/slim.js"></script> -->
		<script>
      		$(function(){
			
      		  // showing modal with effect
      		  $('.modal-effect').on('click', function(e){
      		    e.preventDefault();
      		    var effect = $(this).attr('data-effect');
      		    $('#modaldemo8').addClass(effect);
      		  });
			
      		  // hide modal with effect
      		  $('#modaldemo8').on('hidden.bs.modal', function (e) {
      		    $(this).removeClass (function (index, className) {
      		        return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
      		    });
      		  });
      		});
    	</script>
		<!-- rupiah -->
		<script>
		var elem = document.getElementById("num");

elem.addEventListener("keydown",function(event){
    var key = event.which;
    if((key<48 || key>57) && key != 8) event.preventDefault();
});

elem.addEventListener("keyup",function(event){
    var value = this.value.replace(/,/g,"");
    this.dataset.currentValue=parseInt(value);
    var caret = value.length-1;
    while((caret-3)>-1)
    {
        caret -= 3;
        value = value.split('');
        value.splice(caret+1,0,",");
        value = value.join('');
    }
    this.value = value;
});

function showValue()
{
  console.log(document.getElementById("num").dataset.currentValue);
}
		</script>
		{{-- text hover --}}
		<script>
			$(document).ready(function(){
			  $('[data-toggle="tooltip"]').tooltip();   
			});
			</script>

  </body>
    </html>