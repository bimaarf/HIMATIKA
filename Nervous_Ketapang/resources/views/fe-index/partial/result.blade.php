

<div  id="refresh" class="slim-pageheader">
    <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item"><a href="#">BuTe.ID</a></li>
        <li class="breadcrumb-item active" aria-current="page">Result</li>
    </ol>
    <h6 class="slim-pagetitle">Result</h6>
 </div><!-- slim-pageheader -->
  
<div class="mg-t-20">
    <a href="" class="btn btn-outline-primary btn-sm btn-block mg-b-10" >Refresh</a>
    <br>
    @foreach($order as $ord)
    @if ($ord->product->user->id == Auth::user()->id)
        <div class="blog-header img-gallery-product">
             <!-- modal -->
            <div id="modaldeleted{{ $ord->id }}" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                    <div class="modal-content bd-0 tx-14 rounded">
                        <div class="modal-header pd-y-20 pd-x-25">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><i class="fa fa-trash tx-18-force"> </i> Cancel Order</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body pd-25">
                            <h5 class="lh-3 mg-b-20 tx-inverse"></h5>• {{$ord->product->title}}</h5>
                            <h5 class="lh-3 mg-b-20 tx-inverse"></h5>• Rp {{$ord->price}}</h5>
                            <img src="{{ asset('storage/produk/'. $ord->product->cover_img) }}" class=" mx-auto d-block" alt="">
                            <p class="mg-b-5">Are you sure you want to delete this item? <u>Confirm and delete!</u> </p>
                        </div>
                        <div class="modal-footer rounded">
                            <a href="{{ route('fe-order.hapus', ['id'=>$ord->id]) }}" id="btn-delete" class="btn btn-danger rounded"> Confirm </a>	        
                            <a href="#" class="btn btn-secondary rounded" data-dismiss="modal"> No </a>	        
                        </div>
                    </div>
                </div><!-- modal-dialog -->
            </div>
            <!-- modal -->
        </div>

    <div class="post-grub" >
         <div class="post-item">
            <span class="post-date">From : {{ $ord->user->name }}</span>
            <p class="post-title row">
                <div class="col-lg-3">
                    <img src="{{ asset('storage/produk/'. $ord->product->cover_img )}}" class="rounded float-left img-thumbnail" style="width:150px;" alt="...">

                </div>
                 <table>
                    <div class="col-lg-9 float-left">
                        <tr align=left valign=top>
                            <td>Product name  </td>
                            <td> : </td>
                            <td> {{ $ord->product->title }} </td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Quantity</td>
                            <td> : </td>
                            <td> {{ $ord->quantity }} </td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Total  </td>
                            <td> : </td>
                            <td> Rp {{ $ord->price }} </td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Address  </td>
                            <td> : </td>
                            <td> {{ $ord->address }}</td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Message  </td>
                            <td> : </td>
                            <td>{{ $ord->message }}</td>
                        </tr>
                        <tr align=left valign=top>
                            <td>
                            </td>
                        </tr>
                    </div>
                </table>
                <div class="p-2 bd-highlight">
                    <a href="#modaldeleted{{ $ord->id }}" class="btn-sm btn btn-danger"  data-toggle="modal" data-effect="effect-just-me"><i class="fa fa-trash"></i> Return</a>
                    <a href="https://wa.me/{{ $ord->product->telp }}" class="btn-sm btn btn-success" > <i class="fa fa-whatsapp"></i> Chat</a>
                </div>
            </p>
        </div><!-- post-item -->
    </div>
    
    @endif
  @endforeach
    
                  <!-- MODAL EFFECTS -->
     
  @foreach($order as $ord)
    @if ($ord->user->id == Auth::user()->id)
        <div class="blog-header img-gallery-product">
             <!-- modal -->
            <div id="modaldeleted{{ $ord->id }}" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                    <div class="modal-content bd-0 tx-14 rounded">
                        <div class="modal-header pd-y-20 pd-x-25">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><i class="fa fa-trash tx-18-force"> </i> Cancel Order</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body pd-25">
                            <h5 class="lh-3 mg-b-20 tx-inverse"></h5>• {{$ord->product->title}}</h5>
                            <h5 class="lh-3 mg-b-20 tx-inverse"></h5>• Rp {{$ord->price}}</h5>
                            <img src="{{ asset('storage/produk/'. $ord->product->cover_img) }}" class=" mx-auto d-block" alt="">
                            <p class="mg-b-5">Are you sure you want to delete this item? <u>Confirm and delete!</u> </p>
                        </div>
                        <div class="modal-footer rounded">
                            <a href="{{ route('fe-order.hapus', ['id'=>$ord->id]) }}" id="btn-delete" class="btn btn-danger rounded"> Confirm </a>	        
                            <a href="#" class="btn btn-secondary rounded" data-dismiss="modal"> No </a>	        
                        </div>
                    </div>
                </div><!-- modal-dialog -->
            </div>
            <!-- modal -->
        </div>

    <div class="post-grub" >
         <div class="post-item">
            <span class="post-date">To : {{ $ord->user->name }}</span>
            <p class="post-title row">
                <div class="col-lg-3">
                    <img src="{{ asset('storage/produk/'. $ord->product->cover_img )}}" class="rounded float-left img-thumbnail" style="width:150px;" alt="...">

                </div>
                 <table>
                    <div class="col-lg-9 float-left">
                        <tr align=left valign=top>
                            <td>Product name  </td>
                            <td> : </td>
                            <td> {{ $ord->product->title }} </td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Quantity</td>
                            <td> : </td>
                            <td> {{ $ord->quantity }} </td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Total  </td>
                            <td> : </td>
                            <td> Rp {{ $ord->price }} </td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Address  </td>
                            <td> : </td>
                            <td> {{ $ord->address }}</td>
                        </tr>
                        <tr align=left valign=top>
                            <td>Message  </td>
                            <td> : </td>
                            <td>{{ $ord->message }}</td>
                        </tr>
                        <tr align=left valign=top>
                            <td>
                            </td>
                        </tr>
                    </div>
                </table>
                <div class="p-2 bd-highlight">
                    <a href="#modaldeleted{{ $ord->id }}" class="btn-sm btn btn-danger"  data-toggle="modal" data-effect="effect-just-me"><i class="fa fa-trash"></i> Return</a>
                    <a href="https://wa.me/{{ $ord->product->telp }}" class="btn-sm btn btn-success" > <i class="fa fa-whatsapp"></i> Chat</a>
                </div>
            </p>
        </div><!-- post-item -->
    </div>
    
    @endif
  @endforeach
</div><!-- card -->
  {{-- <center><br><br><br><h5>no results yet :(</h5><br><br><br><br><br></center> --}}
  
    
