@extends('layouts.frontend.main_toko')
@section('content')
<div class="slim-pageheader">
    <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Lapakku.ID</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile Info</li>
    </ol>
    <h6 class="slim-pagetitle">Info</h6>
    </div><!-- slim-pageheader -->

    <div class="card-contact mg-b-20">
        <div class="tx-center">
          <a href="https://instagram.com/{{ $user->name }}" target="_blank"><img src="{{ asset('storage/avatar/'. $user->avatar) }}" class="card-img" alt="profil"></a>
          <h5 class="mg-t-10 mg-b-5"><a href="https://instagram.com/{{ $user->name }}" target="_blank" class="contact-name text-lowercase" style=" text-transform: capitalize;"><i class="fa fa-instagram"></i>&#32;{{ $user->name }}</a></h5>
            @if ($user->hasRole('user'))
            <p style=" text-transform: capitalize;">User</p>
            @endif
            @if ($user->hasRole('admin'))
            <p style=" text-transform: capitalize;" class="text-success">Seller</p>
            
            @endif
            @if ($user->hasRole('owner'))
            <p style=" text-transform: capitalize;" class="text-warning">Owner</p>
            @endif
        </div><!-- tx-center -->

        
        <p class="contact-item">
        
         
        <div class="blog-header img-gallery-product">
          <ul>
    
          @foreach($product as $pd)
          @if ($pd->user_id == $user->id)
            <li class="card bd-1" style="padding-top:10px; margin:10px">
              {{-- window --}}
              
            <a href="{{ route('fe-order.form_tambah_order', ['slug'=>$pd->slug]) }}"><img class="" src="{{ asset('storage/produk/'. $pd->cover_img )}}"></a>
          
          <div class="space"></div>
          
          <p class="t-window pos-absolute t-25 l-40 span-color text-dark" style="text-align: left; font-weight:bold;" ><i class="icon fa fa-shopping-cart mr-1" aria-hidden="true"></i>{{$pd->user->name}}</p>
    
          <p class="t-mobile pos-absolute t-2 l-10 span-color text-dark" style="text-align: left; font-weight:bold;" ><i class="icon fa fa-shopping-cart mr-1" aria-hidden="true"></i>{{$pd->user->name}}</p>
    
          <p class="t-mobile pos-absolute b-5 l-10 span-color" style="text-align: left;" >{{ $pd->title }}<br><span class="span-c ">RP {{ $pd->harga_akhir }}</span> <s>RP {{ $pd->harga_awal }}</s> </p>
    
          <p class="t-window pos-absolute b-60 l-30 span-color" style="text-align: left;" >{{ $pd->title }}<br><span class="span-c ">RP {{ $pd->harga_akhir }}</span> <s>RP {{ $pd->harga_awal }}</s> </p>
          
          <div class="bute pos-absolute b-0 l-0 r-0"><a href="{{ route('fe-order.form_tambah_order', ['slug'=>$pd->slug]) }}"  class="btn btn-outline-info pd-10-force col-md-8" style="margin:10px;">Order now</a></div>
          </li>
          @endif
          @endforeach
          </ul>
        </div>
    </div><!-- card -->
@endsection