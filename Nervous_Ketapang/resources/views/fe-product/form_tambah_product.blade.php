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
			<input class="form-control" type="text" name="title" maxlength="150">
		</div>
		
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="deskripsi" maxlength="255"></textarea>
		</div>
		<div class="form-group">
			<label>Stock</label>
			<input class="form-control" type="number" name="stok" maxlength="4">
		</div>		
		<div class="form-group">
			<label>Starting Price</label>
			<input class="form-control" type="num" name="harga_awal" value="0" readonly maxlength="15">
		</div>	
		<div class="form-group">
			<label>Final Price</label>
			<input class="form-control" type="num" id="num" name="harga_akhir" maxlength="15">
		</div>	
		<div class="form-group">
			<label>Image</label>
			<input class="form-control" type="file" name="cover_img" required>
		</div>		
			
		<hr>
		<input class="btn btn-outline-info pd-10-force col-md-2 " type="submit" onclick="showValue()" />
		&emsp;
		<a href="{{ route('fe-index.index') }}"><input class="btn btn-outline-info pd-10-force col-md-2 " type="button" value="Back"></a>
		</form>
@endsection
