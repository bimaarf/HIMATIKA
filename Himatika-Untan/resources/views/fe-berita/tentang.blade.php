@extends('layouts.frontend.main')
@section('content')

@foreach($struktur as $str)

       <section class="container mobile-container" style="margin-top: 130px;">
           <div class="site-content">
               <div class="posts">
                   <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        
                    
                        
                        <div class="post-title mobile-post-title">
                           <!-- <a href="#" style="align-items: center;">OSELAMATIKA 2</a> -->
                           <p class="top-post-title" >TENTANG</p>
                            <img src="{{ asset('gambar/'. $str->cover_img) }}" class="sumage" alt="">
                           <p class="top-post-title-bot" >Dipublikasikan oleh Himatika Untan pada {{ $str->created_at }}</p>
                           <p class="bot-post-title">&#8195;&#8195;HIMATIKA ( Himpunan Mahasiswa Matematika ) FMIPA UNTAN merupakan Himpunan termuda yang ada di Universitas Tanjungpura. Pada awalnya himpunan ini bernama HIMMASI (Himpunan Mahasiswa Matematika Science) yang dibentuk pada tanggal 18 September 2002, namun pada tanggal 24 September 2004 diganti dengan nama HIMATIKA (Himpunan Mahasiswa Matematika). di usianya yang masih muda, HIMATIKA tidak bisa di pandang sebelah mata, dari Sumber Daya Mahasiswanya merupakan orang-orang pilihan yang memiliki jiwa sosial, jiwa kekeluargaan yang solid serta memiliki  prestasi dibidang Akademiknya.</p>
                           <br>
                           <p class="bot-post-title">
                           Berikut Struktur BPH HIMATIKA FMIPA UNTAN 2019/2020</p>
                           <br>
                           <div class="">
               <table  border="0">
                   <tr class="table" >
                       <td width="5%" valign=top><p class="table">1</p></td>
                       <td width="45%" valign=top><p class="table">Ketua Umum</p></td>
                       <td width="10px" valign=top><p class="table">:</p></td>
                       <td valign=top><p class="table">{{ $str->ketua }}
                       
                       </p></td>

                   </tr>
                   <tr class="table" >
                       <td width="5%" valign=top><p class="table">2</p></td>
                       <td width="45%" valign=top><p class="table">Sekretaris Umum</p></td>
                       <td width="10px" valign=top><p class="table">:</p></td>
                       <td valign=top><p class="table">{{ $str->sekretaris }}
                       
                       </p></td>

                   </tr>
                   <tr class="table" >
                       <td width="5%" valign=top><p class="table">4</p></td>
                       <td width="45%" valign=top><p class="table">Akademik</p></td>
                       <td width="10px" valign=top><p class="table">:</p></td>
                       <td valign=top><p class="table">{{ $str->k_aka }}
                      
                       </p></td>

                   </tr>
                   <tr class="table" >
                       <td width="5%" valign=top><p class="table">5</p></td>
                       <td width="45%" valign=top><p class="table">PSDM</p></td>
                       <td width="10px" valign=top><p class="table">:</p></td>
                       <td valign=top><p class="table">{{ $str->k_psdm }}
                      
                       </p></td>

                   </tr>
                   <tr class="table" >
                       <td width="5%" valign=top><p class="table">6</p></td>
                       <td width="45%" valign=top><p class="table">Humas & Informas</p></td>
                       <td width="10px" valign=top><p class="table">:</p></td>
                       <td valign=top><p class="table">{{ $str->k_humas }}
                      
                       </p></td>

                   </tr>
                   <tr class="table" >
                       <td width="5%" valign=top><p class="table">7</p></td>
                       <td width="45%" valign=top><p class="table">Olahraga & Seni</p></td>
                       <td width="10px" valign=top><p class="table">:</p></td>
                       <td valign=top><p class="table">{{ $str->k_seni }}
                       
                       </p></td>

                   </tr>
                   


               </table>
               <p class="bot-post-title">Pada Kepengurusan periode 2019/2020 ini himatika memiliki visi,  misi, fungsi dan peranan yaitu:</p>
               <br>
               <p class="top-post-title"><i><u>Visi</u></i></p>
               <p class="bot-post-title">&#8195;&#8195;{{ $str->Visi }}
              
               </p>
               <p class="top-post-title"><i><u>Misi</u></i></p>
               <table border=0>
                   <tr class="table" >
                       
                       <td width="100%" valign=top><p class="table">{{ $str->Misi_a }}</p></td>
                       
                   </tr>
                   <tr class="table" >
                       
                       <td width="100%" valign=top><p class="table">{{ $str->Misi_b }}</p></td>
                       
                   </tr>
                   <tr class="table" >
                       
                       <td width="100%" valign=top><p class="table">{{ $str->Misi_c }}</p></td>
                       
                   </tr>
                   <tr class="table" >
                       
                       <td width="100%" valign=top><p class="table">{{ $str->Misi_d }}</p></td>
                       
                   </tr>
                   <tr class="table" >
                       
                       <td width="100%" valign=top><p class="table">{{ $str->Misi_e }}</p></td>
                       
                   </tr>
                   </table>

                   <p class="top-post-title"><i><u>Motto</u></i>
               <blockquote><p><em>"LOYALITAS merupakan kepanjangan dari Loyal dan Berintegritas."</em></p></blockquote>
                   <p class="top-post-title"><i><u>Fungsi dan Peranan</u></i></p>
                   

                   <table border=0 >
                   <tr class="table" >
                       
                       <td width="5%" valign=top><p class="table">1. </p></td>
                       <td width="100%" valign=top><p class="table">Sebagai sarana peningkatan potensi akademik maupun non akademik anggota,</p></td>
                       
                   </tr>
                   <tr class="table" >
                       
                       <td width="5%" valign=top><p class="table">2. </p></td>
                       <td width="100%" valign=top><p class="table">Sebagai penyalur aspirasi anggota,</p></td>
                       
                   </tr>
                   <tr class="table" >
                       
                       <td width="5%" valign=top><p class="table">3. </p></td>
                       <td width="100%" valign=top><p class="table">Membina semangat persatuan dan kesatuan dengan memanfaatkan serta menjalin hubungan fungsional yang ada,</p></td>
                       
                   </tr>
                   <tr class="table" >
                       
                       <td width="5%" valign=top><p class="table">4. </p></td>
                       <td width="100%" valign=top><p class="table">Memperjuangkan kepentingan anggota dalam bentuk dan skala tertentu sesuia dengan asas, landasan, sifat dan tujuan Himatika FMIPA Untan.</p></td>
                       
                   </tr>
                   </table>








                   <!-- batas -->

               </div>
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

       <!-- -----------x---------- Site Content -------------x------------>
@endforeach

   
@endsection