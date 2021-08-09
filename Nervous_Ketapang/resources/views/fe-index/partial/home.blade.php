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

    <!-- ARTIKEL -->
    <div class="card mg-t-20-force">
        <div class="col-lg-t-5">
            <div class="card-sales">
                <a href="#" class="image">
                    <img class="rounded-circle img-thumbnail" width="40" src="" alt="">
                    <span class="text-white"></span>
                    <!-- <i class="fa fa-angle-down"></i> -->
                    <i class=" active fa fa-check-circle" aria-hidden="true"></i>
                </a> <hr>
                <form class="mt-3" action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
            
                        <textarea class="form-control" name="isi" placeholder="Apa yang anda pikirkan ?" maxlength="400"></textarea>
                    
                    </div>
                    <div class="image-upload">
                        <label for="imgInp"> <i class="fa fa-image mr-3"></i></label>

                        <input class="d-none" name="foto" accept="image/*" type='file' id="imgInp" />

                        <img class="image img-fluid mb-3" id="blah" src="#" alt="" />
                    </div>

                    <input  class="btn btn-outline-info pd-10-force col-md-2" type="submit" value="Kirim">

                </form>

                <div class="d-flex mt-3">
                    <a href="https://www.instagram.com//">Business</a>
                    <span class="text-muted ml-1">BuTe.ID</span>
                </div>
            </div>
        </div>
    </div>
    <!--  -->


        <div class="card  mg-t-20">
            <a href="#" class="card-sales">
                <img class="rounded-circle img-thumbnail" width="40" src="" alt="">
                <span class="text-white"></span>
                <!-- <i class="fa fa-angle-down"></i> -->
                <i class=" active fa fa-check-circle" aria-hidden="true"></i><hr class="m-0 mt-3"> 
                </a> 
                <p class="ml-4 mt-2"></p>
        <img class="img-fluid" src="" alt=""> 
        <div class="row no-gutters">
            <div class="card-sales">
                <div class="dash-content">
                    
                    <!-- <div class="blog blog-title h4 tx-white ">Blog header</div> -->
                    
                    <div class="d-flex">
                        <a href="https://www.instagram.com//">Business</a>
                        <span class="text-muted ml-1"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->