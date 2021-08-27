<div class="slim-pageheader">
    <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Lapakku.ID</a></li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
    <h6 class="slim-pagetitle">Home</h6>
</div><!-- slim-pageheader -->    

    @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
    @endif
    
    @if ($message = Session::get('sukses_produk'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button> 
            <strong>{{ $message }}</strong>
        </div>
    @endif

        <div div class=" row" >
            <div class="container col-lg-7">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <!-- modal -->
            <div id="modalpost" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                  <div class="modal-content bd-0 tx-14 rounded">
                    <div class="modal-header pd-y-20 pd-x-25">
                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><i class="fa fa-send tx-18-force"> </i> Writing</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{ route('fe-index.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  force-overfow force-overflow" >
                            <textarea class="form-control bg-transparent text-dark" rows="4" cols="50" onkeyup="textKomen()" name="post"  placeholder="What's happening ?" maxlength="300" style="border: none;" required></textarea>
                            <img class="image img-fluid mb-3" id="blah" width="100px" src="#" alt="" />
                            
                        </div>
                        <div class="modal-footer image-upload rounded">
                            @if (Auth::check())
                            @if (Auth::user()->hasRole('owner|admin'))
                                
                            <label for="imgInp" ><i class="fa fa-image"  class="float-left"></i></label>
                            <input class="d-none" name="cover_img" accept="image/*" type='file' id="imgInp" />
                            @endif

                        @endif
                            <input class="btn btn-outline-info pd-10-force col-md-2 float-right mb-3" type="submit" value="Post">  
                        </div>
                    </form>
                  </div>
                </div><!-- modal-dialog -->
              </div><!-- modal -->
<!-- ARTIKEL -->
                        <div class="card">
                            <div class="col-lg-t-5">
                                <div class="card-sales ">
                                    <a href="#modalpost" data-toggle="modal" data-effect="effect-just-me">
                                    <form action="{{ route('fe-index.post') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    @if (Auth::check())
                                                        <span class="input-group-text card-blog" id="inputGroupPrepend2"><img class="rounded-circle" width="40" src="{{ asset('storage/avatar/'. Auth::user()->avatar) }}" alt=""></span>
                                                    @endif
                                                </div>
                                                <textarea disabled class="form-control " onkeyup="textKomen()" name="post" placeholder="What's happening ?" maxlength="300" data-toggle="modal" data-effect="effect-just-me" required></textarea>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </a>
                                    <div class="d-flex mb-3 mt-4 float-left">
                                        <a href="https://www.instagram.com/lapakkudotid">Business</a>
                                        <span class="text-muted ml-1">Lapakku.ID</span>
                                    </div>
                                </div>
                            </div>
                        </div>
{{-- as --}}
                        <div class="card mg-t-20">
                            <div class="row no-gutters">
                                <div class="card-sales">
                                    <div class="post-grub" >

                                    @foreach ($post as $item)
                                        
                                        
                                        <div class="post-item">
                                            <a href="{{ route('fe-toko.index', ['name'=>$item->user->name]) }}">

                                                <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. $item->user->avatar) }}" alt="">
                                                <span class="text-white">{{ $item->user->name }}</span>
                                            </a>
                                                <!-- <i class="fa fa-angle-down"></i> -->
                                                @foreach ($roleUser as $rol)
                            
                                                    @if ($item->user->id == $rol->user_id)

                                                    {{-- <i class=" active fa fa-check-circle verified" id="verified" aria-hidden="true"></i> --}}
                                                    <img src="{{ asset('frontend/assets/verified/verified.svg') }}" width="13" class="mb-1" alt="">
                                                    
                                                    @endif
                                                @endforeach
                                                @foreach ($owner as $rol)
                            
                                                    @if ($item->user->id == $rol->user_id)
                                                    <img src="{{ asset('frontend/assets/verified/verified.svg') }}" width="13" class="mb-1" alt="">
                                                    <span class="text-success">[Admin]</span>
                                                    
                                                    @endif
                                                @endforeach
                                            
                                                <!-- modal -->
                                        <div id="modaldeleted{{ $item->id }}" class="modal fade">
                                            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                                            <div class="modal-content bd-0 tx-14 rounded">
                                                <div class="modal-header pd-y-20 pd-x-25">
                                                    <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. $item->user->avatar) }}" alt="">
                                                    <h5 class="text-white tx-bold text-dark mg-b-0 tx-inverse ml-1">{{ $item->user->name }}</h5>

                                                        @foreach ($roleUser as $rol)
                                
                                                            @if ($item->user->id == $rol->user_id)
                                                            <img src="{{ asset('frontend/assets/verified/verified.svg') }}" width="13" class="ml-1" alt="">
                                                            @endif

                                                        @endforeach
                                                        @foreach ($owner as $rol)
                                    
                                                            @if ($item->user->id == $rol->user_id)
                                                            <img src="{{ asset('frontend/assets/verified/verified.svg') }}" width="13" class="ml-1" alt="">
                                                            <span class="text-success">[Admin]</span>
                                                            
                                                            @endif
                                                        @endforeach

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                    
                                                <div class="form-group yelah force-overfow force-overflow" >
                                                    <textarea disabled class="form-control bg-transparent text-dark " rows="4" cols="50" onkeyup="textKomen()" name="post"  maxlength="300" style="border: none;" required>{{ $item->post }}</textarea>
                                                </div>
                                                {{-- postingan un auth check --}}
                                               
                                                @if (Auth::check())
                                                    @if ($item->user_id != Auth::user()->id)
                                                        <div class="form-group force-overfow force-overflow" >
                                                            <textarea disabled class="form-control bg-transparent text-dark " rows="4" cols="50" onkeyup="textKomen()" name="post"  maxlength="300" style="border: none;" required>{{ $item->post }}</textarea>
                                                        </div>
                                                    @endif

                                                    @if ($item->user_id == Auth::user()->id)
                                                    <style>.yelah{display: none;}</style>
                                                <form action="{{ route('fe-index.post.edit', ['id'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group  force-overfow force-overflow" >
                                                        <textarea class="form-control bg-transparent text-dark " rows="4" cols="50" onkeyup="textKomen()" name="post"  maxlength="300" style="border: none;" required>{{ $item->post }}</textarea>
                                                        
                                                    </div>
                                                    
                                                        <div class="modal-footer rounded">
                                                            <input type="submit" class="btn btn-primary rounded" value="Edit Post" >    
                                                            <a href="{{ route('fe-index.post.hapus', ['id'=>$item->id]) }}" id="btn-delete" class="btn btn-danger rounded"> <i class="fa fa-trash"></i> Delete Post</a>	        
                                                        </div>
                                                    </form>
                                                    @endif
                                                @endif
                                            </div>
                                            </div><!-- modal-dialog -->
                                        </div><!-- modal -->
                                                {{-- komentar --}}
                                                <!-- modal -->
                                        <div id="comment{{ $item->id }}" class="modal fade" >
                                            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                                            <div class="modal-content bd-0 tx-14 rounded">
                                                <div class="modal-header pd-y-20 pd-x-25 float-left">
                                                    <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. $item->user->avatar) }}" alt="">
                                                    <h5 class="text-white tx-bold text-dark mg-b-0 tx-inverse ml-1">{{ $item->user->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                {{-- Postingan --}}
                                                <div class="komen"  data-spy="scroll" data-offset="0" style="height: 300px;overflow-y: scroll; " >
                                                    <div class="modal-body bg-transparent bd-0 ">
                                                        {{-- postingan --}}
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <img  class="rounded-circle " width="40" src="{{ asset('storage/avatar/'. $item->user->avatar) }}" alt="">
                                                            </div>
                                                            <div class="col-10 ">
                                                                <span class="text-white text-dark"><b>{{ $item->user->name }}</b>&#32;{{ $item->post }}</span>
                                                            <br>
                                                                <small>{{ $item->created_at }}</small>
                                                            </div>
                                                      
                                                        </div>
                                                            {{-- comment --}}
                                                        @foreach ($comment as $cmt)
                                                            @if ($cmt->post_id == $item->id)
                                                                
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <img  class="rounded-circle " width="40" src="{{ asset('storage/avatar/'. $cmt->user->avatar) }}" alt="">
                                                                    </div>
                                                                    <div class="col-10">
                                                                        <span class="text-white text-dark"><b>{{ $cmt->user->name }}</b>&#32;{{ $cmt->comment }}</span>
                                                                        <br>
                                                                        <small>{{ $cmt->created_at }}</small>
                                                                    </div>
                                                                </div>

                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                                {{-- form input comment --}}
                                                <form action="{{ route('fe-comment.tambah', ['id'=>$item->id]) }}" method="post">
                                                    @csrf
                                                    <div class="modal-footer rounded">
                                                        <input class="form-control bg-white text-dark rounded"  onkeyup="textKomen()" name="comment"   style="border: none;" placeholder="Add a comment..." required>
                                                        <button type="submit" class="btn btn-outline-primary rounded" maxlength="100"><i class="fa fa-send"></i>&#32;Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div><!-- modal-dialog -->
                                        </div><!-- modal -->

                                        
                                                <a href="#modaldeleted{{ $item->id }}" data-toggle="modal" data-effect="effect-just-me"><i class="fa fa-ellipsis-h text-secondary pull-right"></i></a>

                                               
                                            
                                                <p class="post-title mt-2 tx-w-space ">{{ $item->post }}</p>
                                                <img class="mb-0 img-fluid center-block"  src="{{ asset('storage/post/'. $item->cover_img) }}" alt=""> 
                                                <!-- <div class="blog blog-title h4 tx-white ">Blog header</div> -->
                            
                                            <div class="d-flex mt-4 ">
                                
                                                <a href="#comment{{ $item->id }}" data-toggle="modal" data-effect="effect-just-me"><i class="fa fa-comment"></i> Comment</a>
                                                <span class="text-muted ml-1">{{ $item->created_at }}</span>
                                
                                            </div>
                                                <hr>
                                        </div><!-- post-item -->

                                    @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- tab-pane -->

<!-- slide show -->
		        </div><!-- tab-pane -->
            </div>
    
            <div class="col-lg-5">
                <div class=" t-window pos-fixed ">
                    <div class=" panel panel-default">
                        <div class="panel-body"></div>
                    </div>
                    
                    <div class="card-sales t-window pos-fixed ">
                            @if (Auth::check())
                                <a href="#modaldemo6" data-toggle="modal" class="col-8 float-left">
                                
                                    <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. Auth::user()->avatar) }}" alt="">
                                    <span class="text-white">{{ Auth::user()->name }}</span>
                                    @if (Auth::user()->hasRole('owner|admin'))

                                    <img src="{{ asset('frontend/assets/verified/verified.svg') }}" width="13" class="mb-1" alt="">

                                    @endif
                                    <span class="tx-12 ml-4 float-right text-secondary"><b>Logout</b></span>
                                        <hr>
                                </a>
                            @endif


                        <div class="col-8 float-left mb-3"><span>Suggestions For You</span><span class="tx-12 float-right">See All</span></div>
                        {{-- Show Owner --}}
                        @foreach ($owner as $rol)
                            @foreach ($user as $item)
                                @if ($item->id == $rol->user_id)
                                    <div class="col-8 fa-pull-left">
                                        <a href="https://instagram.com/{{ $item->name }}" target="_blank">
                                            <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. $item->avatar) }}" alt="">
                                            <span class="text-white">{{ $item->name }}</span>
                                            <img src="{{ asset('frontend/assets/verified/verified.svg') }}" width="13" class="mb-1" alt="">
                                            <span class="text-success">[Admin]</span>
                                            <span class="tx-12 fa-pull-right text-secondary"><i class="fa fa-instagram"></i> <b>Dev-K</b></span>
                                        </a> 
                                            <hr>
                                    </div> 
                                @endif
                            @endforeach
                        @endforeach
                        {{-- Show Seller --}}
                        @foreach ($roleUser as $rol)
                            
                            
                            @foreach ($userSide as $item)
                                @if ($item->id == $rol->user_id)
                                    <div class="col-8 fa-pull-left">
                                        <a href="{{ route('fe-toko.index', ['name'=>$item->name]) }}" target="_blank">
                                            <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. $item->avatar) }}" alt="">
                                            <span class="text-white">{{ $item->name }}</span>
                                            <img src="{{ asset('frontend/assets/verified/verified.svg') }}" width="13" class="mb-1" alt="">
                                            <span class="tx-12 fa-pull-right text-secondary"><i class="icon ion-ios-people"></i> <b>Seller  </b></span>
                                        </a> 
                                            <hr>
                                    </div> 
                                @endif
                            @endforeach

                        @endforeach
                        
                    </div> <!-- -card -->
                        <!-- no deleted -->
                </div>
            </div> <!-- col-md -->

        </div> <!-- row -->