<div class="slim-pageheader">
  <ol class="breadcrumb slim-breadcrumb">
    <li class="breadcrumb-item"><a href="#">Nervous</a></li>
    <li class="breadcrumb-item active" aria-current="page">Shop</li>
  </ol>
  <h6 class="slim-pagetitle">Shop</h6>
</div><!-- slim-pageheader -->

<div class="section-wrapper">
    <div class="card bd-0">
     
      <div class="blog-header img-gallery-product">
        <ul>

        @foreach($product as $pd)
          <li class="card bd-1" style="padding-top:10px; margin:10px">
            {{-- window --}}
            
          <a href="{{ route('fe-order.form_tambah_order', ['slug'=>$pd->slug]) }}"><img class="" src="{{ asset('produk/'. $pd->cover_img )}}"></a>
        
        <div class="space"></div>
        
        <p class="t-window pos-absolute t-25 l-40 span-color text-dark" style="text-align: left; font-weight:bold;" ><i class="icon fa fa-shopping-cart mr-1" aria-hidden="true"></i>Nervous</p>

        <p class="t-mobile pos-absolute t-20 l-10 span-color text-dark" style="text-align: left; font-weight:bold;" ><i class="icon fa fa-shopping-cart mr-1" aria-hidden="true"></i>Nervous</p>

        <p class="t-mobile pos-absolute b-5 l-10 span-color" style="text-align: left;" >{{ $pd->title }}<br><span class="span-c ">RP {{ $pd->harga_akhir }}</span> <s>RP {{ $pd->harga_awal }}</s> </p>

        <p class="t-window pos-absolute b-60 l-30 span-color" style="text-align: left;" >{{ $pd->title }}<br><span class="span-c ">RP {{ $pd->harga_akhir }}</span> <s>RP {{ $pd->harga_awal }}</s> </p>
        
        <div class="bute pos-absolute b-0 l-0 r-0"><a href="#" class="btn btn-outline-info pd-10-force col-md-8" style="margin:10px;">Pesan sekarang</a></div>
        </li>
        @endforeach
        </ul>
      </div>
    </div><!-- card -->
</div><!-- section-wrapper -->