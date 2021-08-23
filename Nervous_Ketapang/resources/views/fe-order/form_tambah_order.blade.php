@extends('layouts.frontend.main_order')
@section('content')
	<div class="slim-pageheader">
	<ol class="breadcrumb slim-breadcrumb">
		<li class="breadcrumb-item"><a href="#">Lapakku.ID</a></li>
		<li class="breadcrumb-item active" aria-current="page">Order</li>
  	</ol>
  <h6 class="slim-pagetitle">Order</h6>
  </div>
		<form method="POST" action="{{ route('fe-order.tambah', ['id'=>$product->id]) }}" id="formD" name="formD" enctype="multipart/form-data">
			@csrf
			<div class = "row form-group">
				<div class="col-lg-5"> 
					<img src="{{ asset('storage/produk/'. $product->cover_img )}}" class="rounded float-left img-thumbnail" style="width:350px;height:400px" alt="...">

				</div>
					<div class="col-lg-7 table-responsive text-justify pull-left mt-2"> 
						<table class=" mg-b-0 tx-12 ">
							<tr align=left valign=top>
								<td class="col-1">Product Name</td>
								<td class="col-1">:</td>
								<td class="col-5">{{ $product->title }}</td>
							</tr>
							<tr align=left valign=top>
								<td class="col-1 ">Description</td>
								<td class="col-1">:</td>
								<td class="col-5 tx-w-space">{{ $product->deskripsi }}</td>
							</tr>
							<tr align=left valign=top>
								<td class="col-1">Price</td>
								<td class="col-1">:</td>
								<td class="col-5" name="price" >Rp {{ $product->harga_akhir }}</td>
							</tr>
							<tr align=left valign=top>
								<td class="col-1">Stock</td>
								<td class="col-1">:</td>
								<td class="col-5" name="price" >{{ $product->stok }}</td>
							</tr>
						</table>
				</div>
			</div>
			
			<div class="form-group">
				<label>Quantity</label> <small class="text-danger"><i>*Stock {{ $product->stok }}, please see stock before input</i></small>
				<input class="form-control" type="num" name="quantity"  onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" maxlength="4" min="1" max="{{ $product->stok }}" placeholder="Maximal input {{ $product->stok }}" required>
			</div>		
			<div class="form-group">
				<label>Total Price</label>
				<input class="form-control" type="hidden" name="harga_akhir" value="<?php
				$bute = preg_replace("/[^0-9]/", "", $product->harga_akhir);echo $bute; ?>" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required>
			</div>	

			<div class="input-group form-group">
				<div class="input-group-prepend">
					<div class="input-group-text text-white">Rp</div>
				  </div>
				<input class="form-control" id="num" type="text" name="price" value="0" onkeyup="OnChange(this.value)"  onKeyPress="return isNumberKey(event)" readonly maxlength="15" required>
			</div>
				
			<div class="form-group">
				<label><i class="fa fa-whatsapp text-success"></i> Whatsapp</label> <small class="text-danger"><i>*Enter your whatsapp number for easy transaction</i></small>
				<input type="num" class="form-control" name="telp" placeholder="6281XXX" pattern= "[0-9]+" maxlength="16" required>
			</div>
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="address" maxlength="255" placeholder="Full address to facilitate the process between goods" required></textarea>
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea class="form-control" name="message" placeholder="Specify color and size" maxlength="255" required></textarea>
			</div>
				
			<hr>
			<input class="btn btn-outline-info pd-10-force col-md-2 " type="submit" onclick="showValue()" />
			&emsp;
			<a href="{{ route('fe-index.index') }}"><input class="btn btn-outline-info pd-10-force col-md-2 " type="button" value="Back"></a>
		</form>
		<script type="text/javascript" language="Javascript">
			hargasatuan = document.formD.harga_akhir.value;
			document.formD.price.value = hargasatuan;
			jumlah = document.formD.quantity.value;
			document.formD.price.value = jumlah;
			function OnChange(value){
			  hargasatuan = document.formD.harga_akhir.value;
			  jumlah = document.formD.quantity.value;
			  price = hargasatuan * jumlah;
			  document.formD.price.value = price;
			}
		  </script>
@endsection
