<div class="slim-pageheader">
    <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Nervous</a></li>
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
<!-- ARTIKEL -->
                        <div class="card">
                            <div class="col-lg-t-5">
                                <div class="card-sales ">
                                    <form action="{{ route('fe-index.post') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    @if (Auth::check())
                                                        <span class="input-group-text card-blog" id="inputGroupPrepend2"><img class="rounded-circle" width="40" src="{{ asset('storage/avatar/'. Auth::user()->avatar) }}" alt=""></span>
                                                    @endif
                                                </div>
                                                <textarea class="form-control " name="post" placeholder="What's happening ?" maxlength="300" required></textarea>
                                            </div>
                                        </div>
                                        <div class="image-upload">
                                            <label for="imgInp" ><i class="fa fa-image"  class="float-left"></i></label>
                                            <input class="d-none" name="cover_img" accept="image/*" type='file' id="imgInp" />
                                            <input class="btn btn-outline-info pd-10-force col-md-2 float-right mb-3" type="submit" value="Post"> 
                                            <img class="image img-fluid mb-3" id="blah" src="#" alt="" />
                                        </div>
                                    </form>
                                    <div class="d-flex mb-3 mt-4 float-left">
                                        <a href="https://www.instagram.com/">Business</a>
                                        <span class="text-muted ml-1">BuTe.ID</span>
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
                                            <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. $item->user->avatar) }}" alt="">
                                                <span class="text-white">{{ $item->user->name }}</span>
                                                <!-- <i class="fa fa-angle-down"></i> -->
                                                @foreach ($roleUser as $rol)
                            
                                                    @if ($item->user->id == $rol->user_id)

                                                    <i class=" active fa fa-check-circle verified" id="verified" aria-hidden="true"></i>
                                                    
                                                    @endif
                    
                                            @endforeach
                                                <p class="post-title mt-2">{{ $item->post }}</p>
                                                <img class="mb-0 img-fluid center-block"  src="{{ asset('storage/post/'. $item->cover_img) }}" alt=""> 
                                                <!-- <div class="blog blog-title h4 tx-white ">Blog header</div> -->
                            
                                            <div class="d-flex mt-4 ">
                                
                                                <a href="https://www.instagram.com/bimaarf_">Business</a>
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
                                    <i class=" active fa fa-check-circle verified" id="verified" aria-hidden="true"></i>
                                    <span class="tx-12 ml-4 float-right"><b>Switch</b></span>
                                        <hr>
                                </a>
                            @endif


                        <div class="col-8 float-left mb-3"><span>Suggestions For You</span><span class="tx-12 float-right">See All</span></div>
                        @foreach ($roleUser as $rol)
                            
                            @foreach ($user as $item)
                                @if ($item->id == $rol->user_id)
                                    <div class="col-8 fa-pull-left">
                                        <a href="https://instagram.com/">
                                            <img class="rounded-circle img-thumbnail" width="40" src="{{ asset('storage/avatar/'. $item->avatar) }}" alt="">
                                            <span class="text-white">{{ $item->name }}</span>
                                            <i class=" active fa fa-check-circle verified" id="verified" aria-hidden="true"></i>
                                            <span class="tx-12 fa-pull-right"> <b>Visit  </b></span>
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