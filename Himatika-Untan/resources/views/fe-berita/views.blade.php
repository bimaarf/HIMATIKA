
@extends('layouts.frontend.main')
@section('content')
    

        
        <!-- ----------x---------- Blog Carousel --------x-------- -->
        <div class="t-mobile" style="margin-top:100px;"></div>

        <!-- ---------------------- Site Content -------------------------->
        <section class="container" >
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        
                        <div class="post-title mobile-post-title">
                            <!-- <a href="#" style="align-items: center;">OSELAMATIKA 2</a> -->
                            <p class="top-post-title" >{{ $berita->judul }}</p>
                            <p class="top-post-title-bot" >Dipublikasikan oleh Himatika Untan pada {{ $berita->created_at }}</p>
                            <p class="bot-post-title">&#8195;&#8195;{{ $berita->isi }}</p>
                            <!-- <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button> -->
                        </div>
                    </div>
                    <hr>
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
