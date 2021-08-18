<div class="slim-header" id="refresh">
    <div class="container">
      <div class="slim-header-left">
        <h2 class="slim-logo"><a href="{{ route('fe-index.index') }}">To<span>Ko</span></a></h2>

        <form action="{{ route('fe-index.index') }}" >

          <div class="search-box">
            
            <input type="text" name="search" class="form-control" placeholder="Search ">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            
          </div><!-- search-box -->
        </form>
      </div><!-- slim-header-left -->
      @if(Auth::check())
      <div class="slim-header-right" style="z-index:2;">
        <a href="{{ route('fe-index.index') }}" class="header-notification"><i class="fa fa-home"></i></a>
        <div class="dropdown dropdown-a">
          <a href="#" class="header-notification" data-toggle="dropdown">
            <i class="fa fa-user mr-1"></i><i class="fa fa-angle-down"></i>
          </a>
          <div class="dropdown-menu ">
            <div class="dropdown-menu-header">
              <h6 class="dropdown-menu-title">Profil</h6>
            </div><!-- dropdown-menu-header -->
            <div class="dropdown-activity-list">
              <div class="activity-item">
                <div class="row no-gutters">
                  <div class="col-2 tx-left">Username</div>
                  <div class="col-2 tx-center">:</div>
                  <div class="col-8">{{Auth::user()->name}}</div>
                </div><!-- row -->
                <div class="row no-gutters">
                  <div class="col-2 tx-left">Email</div>
                  <div class="col-2 tx-center">:</div>
                  <div class="col-8">{{Auth::user()->email}}</div>
                </div><!-- row -->
            </div><!-- dropdown-activity-list -->
            <div class="dropdown-list-footer dropdown dropdown-b">
              <a href="#modaldemo6"  data-toggle="modal" data-effect="effect-just-me"><h6 class="dropdown-menu-title dropdown dropdown-b">Logout</h6></a>
            </div>
          </div><!-- dropdown-menu-right -->
        </div><!-- dropdown -->
      </div><!-- dropdown -->
      @endif

      <div class="slim-header-right  @if(Auth::check()) d-none @endif" style="z-index:2;">
        <a href="{{ route('fe-index.index') }}" class="header-notification"><i class="fa fa-home"></i></a>
        <div class="dropdown dropdown-a">
          <a href="" class="header-notification" data-toggle="dropdown">
            <i class="icon ion-ios-bolt-outline"></i>
          </a>
          <div class="dropdown-menu" >
            <div class="dropdown-menu-header">
              <a href="{{route('login')}}"><h6 class="dropdown-menu-title"><i class="fa fa-user mr-1"></i>Login</h6></a>
            </div><!-- dropdown-menu-header -->
            <div class="dropdown-menu-header">
              <a href="{{route('register')}}"><h6 class="dropdown-menu-title"><i class="fa fa-user mr-1"></i>Register</h6></a>
            </div><!-- dropdown-menu-header -->
            
          </div><!-- dropdown-menu-right -->
        </div><!-- dropdown -->
        
              
            </div>
          </div><!-- dropdown-menu-right -->
        </div><!-- dropdown -->
      </div><!-- dropdown -->
      
      
     

      </div><!-- header-right -->
    </div><!-- container -->
  <!-- navbar -->
<div class="slim-navbar" style="z-index:1;">
    <div class="container">
      <ul class="nav">

        <li class="nav-item">
            <a class="nav-link" href="#shop" data-toggle="tab">
              <i class="icon fa fa-edit" aria-hidden="true"></i>
              <span>Order</span>
            </a>
          </li>	
        
      </ul>
    </div><!-- container -->
  </div><!-- slim-navbar -->
  @if(Auth::check())
                          <!-- MODAL EFFECTS -->
                              <div id="modaldemo6" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                  <div class="modal-content bd-0 tx-14 rounded">
                    <div class="modal-header pd-y-20 pd-x-25">
                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Log Out</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body pd-25">
                      <h5 class="lh-3 mg-b-20 tx-inverse">Hai {{Auth::user()->name}}</h5>
                      <p class="mg-b-5">Are you sure you want to log out? <u>Confirm and log out</u> </p>
                    </div>
                    <div class="modal-footer rounded">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                      <a href="{{ route('logout') }}"><button type="button" id="btn-delete" class="btn btn-danger rounded" onclick="event.preventDefault(); this.closest('form').submit();"> Confirm </button></a>	        
                      <button type="button" class="btn btn-secondary rounded" data-dismiss="modal"> No </button>
              </form>
                    </div>
                  </div>
                </div><!-- modal-dialog -->
              </div><!-- modal -->
        @endif
<br><br><br><br><br><br><br>