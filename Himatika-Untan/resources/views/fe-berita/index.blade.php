@extends('layouts.frontend.main')
@section('content')

<section class="site-title">
    <div class="site-background" data-aos="fade-up" data-aos-delay="100">
        <h3>Universitas Tanjungpura</h3>
        <h1>HIMATIKA FMIPA UNTAN</h1>
        <button class="btn">Selamat datang di webbsite resmi kami</button>
    </div>
</section>
<section>
    <div  class="blog" style="margin-top:-200px;">
        <div class="container">
            <div class="owl-carousel owl-theme blog-post">
                @foreach ($berita as $brt)
                    
                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                    <img class="galeri" src="{{ asset('gambar/'. $brt->cover_img) }}" alt="Image Error!">
                    <div class="blog-title">
                        <h3>{{ $brt->judul }}</h3>
                    <a href="#"><button class="btn btn-blog" >Read More </button></a>
                        <span>{{ $brt->created_at }}</span>
                    </div>
                </div>
                @endforeach
            </div>
           
        </div>
    </div>
   
</section>
<div class=" t-mobile" style="margin-top:80px;"></div>
<section class="container mobile-container" style="margin-top: -200px; ">
    <div class="site-content">
        <div class="posts">
            @foreach ($berita as $brt)
                
            <div class="post-content post-content-s "  data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                    <img class="img" src="{{ asset('gambar/'. $brt->cover_img) }}">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;{{ $brt->created_at }}</span>
                        
                    </div>
                </div>
                <div class="post-title">
                    <a href="#">{{ $brt->judul }}</a>
                    <p class="bot-post-title ticket-text">{{ substr($brt->isi, 0, 300) }}...</p>
                    <a href="#"><button class="btn post-btn ticket-text">  Read More &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                    <hr>
                </div> 
            </div>
            <br>
            @endforeach

            <div class="pagination flex-row">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="pages">1</a>
                <!-- <a href="#" class="pages">2</a>
                <a href="#" class="pages">3</a> -->
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
       @include('layouts.frontend.partisi.sidebar')
    </div>
</section>
    
@endsection