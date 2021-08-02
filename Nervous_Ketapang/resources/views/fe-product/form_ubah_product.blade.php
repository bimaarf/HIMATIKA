@extends('layouts.frontend.main_produk')
@section('content')

@if ($product->user_id ==  Auth::user()->id)
	<div class="slim-pageheader">
	<ol class="breadcrumb slim-breadcrumb">
		<li class="breadcrumb-item"><a href="#">Nervous</a></li>
		<li class="breadcrumb-item active" aria-current="page">Product</li>
  	</ol>
  <h6 class="slim-pagetitle">Product</h6>
  </div>
		<form method="POST" action="{{ route('fe-product.ubah', ['slug'=>$product->slug]) }}" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label>Product Name</label>
			<input class="form-control" type="text" name="title" value="{{ $product->title }}">
		</div>
		
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="deskripsi">{{ $product->deskripsi }}</textarea>
		</div>
		<div class="form-group">
			<label>Stock</label>
			<input class="form-control" type="number" name="stok" value="{{ $product->stok }}">
		</div>		
		<div class="form-group">
			<label>Previous Price</label>
			<input class="form-control" type="num" name="harga_awal" value="{{ $product->harga_akhir }}"readonly />
		</div>	
		<div class="form-group">
			<label>Final Price</label>
			<input class="form-control" type="num" name="harga_akhir" id="num" required>
		</div>	
		<div class="form-group">
			<label>Image</label>
			<input class="form-control" type="file" name="cover_img">
		</div>		
			
		<hr>
		<input class="btn btn-outline-info pd-10-force col-md-2 " value="Update" type="submit" onclick="showValue()">
		&emsp;
		<a href="{{ route('fe-index.index') }}"><input class="btn btn-outline-info pd-10-force col-md-2 " type="button" value="Batal"></a>
		</form>
@endif
@endsection
