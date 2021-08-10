<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">BuTe.ID</a></li>
					<li class="breadcrumb-item active" aria-current="page">PROFILE</li>
				</ol>
				<h6 class="slim-pagetitle">PROFILE</h6>
				</div><!-- slim-pageheader -->

				<div class="card-contact mg-b-20">
        		    <div class="tx-center">
        		      <a href="#"><img src="{{ asset('storage/avatar/'. Auth::user()->avatar) }}" class="card-img" alt="profil"></a>
        		      <h5 class="mg-t-10 mg-b-5"><a href="#" class="contact-name" style=" text-transform: capitalize;">{{ Auth::user()->name }}</a></h5>
        		      <p style=" text-transform: capitalize;">User</p>
        		      <p class="contact-social">
        		        <a href=""><i class="fa fa-facebook"></i></a>
        		        <a href=""><i class="fa fa-twitter"></i></a>
        		        <a href=""><i class="fa fa-google"></i></a>
        		      </p>
        		    </div><!-- tx-center -->

        		    <p class="contact-item">
        		      <span>ID :</span>
        		      <span>{{ Auth::user()->id }}</span>
        		    </p><!-- contact-item -->
        		    <p class="contact-item">
        		      <span>Email : </span>
        		     <span>{{ Auth::user()->email }}</span>
        		    </p><!-- contact-item -->
        		    <p class="contact-item">
        		      <span>Setting :</span>
        		      <a href="#">change password</a>
        		    </p><!-- contact-item -->
        		    <p class="contact-item">
        		      <span>Tambah pengguna :</span>
        		      <a href="tambah-pengguna.php">Register</a>
        		    </p><!-- contact-item -->
        		</div><!-- card -->