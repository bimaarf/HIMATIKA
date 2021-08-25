<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Lapakku.ID</a></li>
					<li class="breadcrumb-item active" aria-current="page">Profile</li>
				</ol>
				<h6 class="slim-pagetitle">Profile</h6>
				</div><!-- slim-pageheader -->

				<div class="card-contact mg-b-20">
        		    <div class="tx-center">
        		      <a href="#"><img src="{{ asset('storage/avatar/'. Auth::user()->avatar) }}" class="card-img" alt="profil"></a>
        		      <h5 class="mg-t-10 mg-b-5"><a href="#" class="contact-name text-lowercase" style=" text-transform: capitalize;">{{ Auth::user()->name }}</a></h5>
						@if (Auth::user()->hasRole('user'))
						<p style=" text-transform: capitalize;">User</p>
						@endif
						@if (Auth::user()->hasRole('admin'))
						<p style=" text-transform: capitalize;" class="text-info">Seller</p>
						
						@endif
						@if (Auth::user()->hasRole('owner'))
						<p style=" text-transform: capitalize;" class="text-success">Admin</p>
						@endif
        		    </div><!-- tx-center -->

        		    <p class="contact-item">
        		      <span>Instagram :</span>
        		      <span><i class="fa fa-instagram"></i>&#32;{{Auth::user()->name }}</span>
        		    </p><!-- contact-item -->
        		    <p class="contact-item">
        		      <span>Email : </span>
        		     <span>{{ Auth::user()->email }}</span>
        		    </p><!-- contact-item -->
        		    <p class="contact-item">
        		      <span>Setting :</span>
        		      <a href="#">Coming soon</a>
        		    </p><!-- contact-item -->
        		    <p class="contact-item">
        		      <span>Become a seller :</span>
        		      <a href="https://instagram.com/lapakkudotid" target="blank">Register</a>
        		    </p><!-- contact-item -->
        		</div><!-- card -->