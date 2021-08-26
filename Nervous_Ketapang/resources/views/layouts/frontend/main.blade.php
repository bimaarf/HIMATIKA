<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width,initial-scale=1">
		<meta name="keywords" content="coretanmahasiswa,toko coretanmahasiswa,coretan mahasiswa,CoretanMahasiswa,Coretan Mahasiswa,artikel,blog,berita,mahasiswa,coretan">
    	<meta name="description" content="Platform pesan - antar untuk pebisnis PO, JASA & suply produk. Diprioritaskan untuk Kab. Ketapang">
		<title>Lapakku - Create your own online shop</title>
		<link href="https://i.ibb.co/5Y4ZHqn/CM-black-150.png" rel="shortcut icon">
		<link rel="icon" href="{{asset('frontend/assets/icon/icon.png')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('frontend/assets/icon/icon.png')}}" sizes="32x32" />
        <link rel="icon" href="https://i.ibb.co/5Y4ZHqn/CM-black-150.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/assets/icon/icon.png')}}">
        <meta name="msapplication-TileImage" content="{{asset('frontend/assets/icon/icon.png')}}">
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

		<style>
			.img-gallery-product img{
				width: 280px;
				height: 300px;
				filter: brightness(1);
			}
			.img-gallery-product img:hover{
				transition: all 0.2s ease-out 0s;
				filter: brightness(0.9);
			}
			.tx-w-space {
                    white-space: pre-wrap;       /* css-3 */
                    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
                    white-space: -pre-wrap;      /* Opera 4-6 */
                    white-space: -o-pre-wrap;    /* Opera 7 */
                    word-wrap: break-word;       /* Internet Explorer 5.5+ */
			}
			textarea::-webkit-scrollbar {
					width: 3px;
					background-color: #F5F5F5; }

					textarea::-webkit-scrollbar-thumb {
					border-radius: 10px;
					-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
					background-color: #1b84e7; 
			}
						/* Hide scrollbar for Chrome, Safari and Opera */
			.komen::-webkit-scrollbar {
			display: none;
			}

			/* Hide scrollbar for IE, Edge and Firefox */
			.komen {
			-ms-overflow-style: none;  /* IE and Edge */
			scrollbar-width: none;  /* Firefox */
			}
			@media screen and (max-width:500px) {
				
				.img-gallery-product img{
					max-width: 100px;
					max-height: 110px;
					justify-content: center;
					filter: brightness(1);
				}
				.img-gallery-product ul{
					grid-template-columns: 1fr 1fr
				}
				
			}
		</style>
	</head>
	<body class="slim-sticky-header scrollbar scrollbar-near-moon thin">
		@include('layouts.frontend.partial.header')
		
		<div class="container">
				
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
			<script src="{{asset('frontend/assets/bootstrap_slim/js/rupiah.js')}}"></script>
			<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
			{{-- post img inp --}}
			<script>
				imgInp.onchange = evt => {
	  const [file] = imgInp.files
	  if (file) {
		blah.src = URL.createObjectURL(file)
	  }
	}
			</script>
			

	</body>
</html>