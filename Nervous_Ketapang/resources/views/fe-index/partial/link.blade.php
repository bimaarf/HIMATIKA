<div class="slim-pageheader">
    <ol class="breadcrumb slim-breadcrumb">
      <li class="breadcrumb-item"><a href="#">Lapakku.ID</a></li>
      <li class="breadcrumb-item active" aria-current="page">My Shop</li>
    </ol>
    <h6 class="slim-pagetitle">My Shop</h6>
  </div><!-- slim-pageheader -->

  <div class="section-wrapper">
      <div class="card bd-0">
        
        @if (Auth::user()->hasRole('user'))
            
        <small class="text-warning"><i>*Follow and DM &nbsp;<a href="https://instagram.com/lapakkudotid" target="_blank"> <i class="fa fa-instagram"></i> lapakkudotid</a>&nbsp;to activate the selling product feature and a verified account.</i></small>
        
        @endif

        <a href="{{ route('fe-product.form_tambah_product') }}" class="btn btn-outline-info pd-10-force col-md-12 nangkak">Add Product</a>
        <div class="blog-header img-gallery-product">
            
            <ul>
          @foreach($product as $pd)
          @if ($pd->user_id ==  Auth::user()->id)
           
            <li class="card bd-1" style="padding-top:10px; margin:10px">
              {{-- window --}}
              <a href="{{ route('fe-product.form_ubah_product', ['slug'=>$pd->slug]) }}"><i class="fa fa-edit t-window pos-absolute t-5 r-60 tx-20-force " data-toggle="tooltip" title="Edit!"></i></a>

              <a href="#produkdeleted{{ $pd->id }}" data-toggle="modal" data-effect="effect-just-me"><i class="fa fa-trash t-window pos-absolute t-5 r-20 tx-20-force text-danger" data-toggle="tooltip" title="Delete!"></i></a>

              {{-- mobile --}}
              <a href="{{ route('fe-product.form_ubah_product', ['slug'=>$pd->slug]) }}"><i class="fa fa-edit t-mobile pos-absolute t-5 r-40 " data-toggle="tooltip" title="Edit!"></i></a>
              
              <a href="#produkdeleted{{ $pd->id }}" data-toggle="modal" data-effect="effect-just-me"><i class="fa fa-trash t-mobile pos-absolute t-5 r-10  text-danger" data-toggle="tooltip" title="Delete!"></i></a>

            <!-- modal -->
            <div id="produkdeleted{{ $pd->id }}" class="modal fade">
              <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14 rounded">
                  <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><i class="fa fa-trash tx-18-force"> </i> Delete item</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body pd-25">
                    <h5 class="lh-3 mg-b-20 tx-inverse"></h5>• {{$pd->title}}</h5>
                    <h5 class="lh-3 mg-b-20 tx-inverse"></h5>• Rp {{$pd->harga_akhir}}</h5>
                    <img src="{{ asset('storage/produk/'. $pd->cover_img) }}" class=" mx-auto d-block" alt="">
                    <p class="mg-b-5">Are you sure you want to delete this item? <u>Confirm and delete!</u> </p>
                  </div>
                  <div class="modal-footer rounded">
                    <a href="{{ route('fe-product.hapus', ['id'=>$pd->id]) }}" id="btn-delete" class="btn btn-danger rounded"> Confirm </a>	        
                    <a href="#" class="btn btn-secondary rounded" data-dismiss="modal"> No </a>	        
                  </div>
                </div>
              </div><!-- modal-dialog -->
            </div><!-- modal -->
            
              
            <a href="#"><img src="{{ asset('storage/produk/'. $pd->cover_img )}}"></a>
          
          <div class="space"></div>
          
          <p class="t-window pos-absolute t-25 l-40 span-color text-dark" style="text-align: left; font-weight:bold;" ><i class="icon fa fa-shopping-cart mr-1" aria-hidden="true"></i>{{ Auth::user()->name }}</p>
  
          <p class="t-mobile pos-absolute t-2 l-10 span-color text-dark" style="text-align: left; font-weight:bold;" ><i class="icon fa fa-shopping-cart mr-1" aria-hidden="true"></i>{{ Auth::user()->name }}</p>
  
          <p class="t-mobile pos-absolute b-5 l-10 span-color" style="text-align: left;" >{{ $pd->title }}<br><span class="span-c ">RP {{ $pd->harga_akhir }}</span> <s>RP {{ $pd->harga_awal }}</s> </p>
  
          <p class="t-window pos-absolute b-60 l-30 span-color" style="text-align: left;" >{{ $pd->title }}<br><span class="span-c ">RP {{ $pd->harga_akhir }}</span> <s>RP {{ $pd->harga_awal }}</s> </p>
          
          <div class="bute pos-absolute b-0 l-0 r-0"><a href="#" class="btn btn-outline-info pd-10-force col-md-8" style="margin:10px;">Pesan sekarang</a></div>
          </li>
          @endif
          @endforeach
          
          </ul>
        </div>
      </div><!-- card -->
  </div><!-- section-wrapper -->