@extends('layouts.frontend.main_produk')
@section('content')
	
	<div class="slim-pageheader">
	<ol class="breadcrumb slim-breadcrumb">
		<li class="breadcrumb-item"><a href="#">Nervous</a></li>
		<li class="breadcrumb-item active" aria-current="page">Home</li>
  	</ol>
  <h6 class="slim-pagetitle">Add</h6>
  </div>
		<form method="POST" action="{{ route('fe-product.tambah') }}" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label>Product Name</label>
			<input class="form-control" type="text" name="title">
		</div>
		
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="deskripsi"></textarea>
		</div>
		<div class="form-group">
			<label>Stock</label>
			<input class="form-control" type="number" name="stok">
		</div>		
		<div class="form-group">
			<label>Starting Price</label>
			<input class="form-control" type="number" name="harga_awal">
		</div>	
		<div class="form-group">
			<label>Final Price</label>
			<input class="form-control" type="number" name="harga_akhir">
		</div>	
		<div class="form-group">
			<label>Image</label>
			<input class="form-control" type="file" name="cover_img">
		</div>		
			
		<hr>
		<input class="btn btn-outline-info pd-10-force col-md-2 " type="submit" onclick="showValue()">
		&emsp;
		<a href="{{ route('fe-index.index') }}"><input class="btn btn-outline-info pd-10-force col-md-2 " type="button" value="Back"></a>
		</form>
@endsection
