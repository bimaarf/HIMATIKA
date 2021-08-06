@extends('layouts.frontend.main')
@section('content')
@foreach ($struktur as $str)
    
<section class="container mobile-container" style="margin-top: 130px;">
    <div class="site-content">
        <div class="posts">
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                
                
                <div class="post-title mobile-post-title">
                    <!-- <a href="#" style="align-items: center;">OSELAMATIKA 2</a> -->
                    
                    <p class="top-post-title" >PROFIL KAMI</p>
                    <img src="{{ asset('gambar/'. $str->cover_img) }}" class="sumage " style="width:3px;" alt="">

                    
                    <p class="bot-post-title">&#8195;&#8195;Himatika FMIPA Untan periode 2018/2019 memiliki nama kabinet “Loyalitas” merupakan kepanjangan dari Loyal dan Berintegritas,  yang berarti kami selaku pengurus Himatika FMIPA Untan akan bekerja secara loyal layaknya seorang pemimpin yang siap menjalankan amanah dan bekerja secara bertingkat dan teratur. Adapun Visi dan Misi yang kami usung adalah</p>
                    <br>
                    
                    <br>
                    
        
        
                    <p class="top-post-title"><i><u>Visi</u></i></p>
        <p class="bot-post-title">&#8195;&#8195;{{ $str->Visi }}
       </p>
        
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

            <p class="top-post-title"><i><u>Struktur Kepengurusan dan Program Kerja</u></i></p>
        
           
            
            
        
       
        <p class="top-post-title-bot">Ketua Umum :</p>
        <p class="top-post-title-bot">{{ $str->ketua }}
        </p>
            


        
        <blockquote><p><em>    "Ketua Umum berwenang Menentukan kebijakan teknis dan strategis, melakukan koordinasi dengan seluruh pengurus Himatika. Ketua juga bertanggung jawab&nbsp; terhadap semua kegiatan Himatika, penanggungjawab utama kepengurusan Himatika periode berjalan, mengevaluasi kegiatan yang dalam pelaksanaannya dibantu oleh Sekretaris Umum, Bendahara Umum, dan Kepala Bidang, Menyusun laporan pertanggungjawaban di akhir kepengurusan yang dalam pelaksanaannya dibantu oleh setiap bidang"</em></p></blockquote>
        

        <p class="top-post-title-bot">Sekretaris  Umum :</p>
        <p class="top-post-title-bot">{{ $str->sekretaris }}
        
        </p>

        <blockquote><p><em>    "Sekretaris Umum memiliki wewenang menggantikan posisi Ketua Umum apabila tidak berada di tempat"</em></p></blockquote>
        
        <p class="top-post-title-bot">Bendahara   Umum :</p>
        <p class="top-post-title-bot">{{ $str->bendahara }}</p>


        <blockquote><p><em>    "Bendahara Umum memiliki wewenang Merancang pengalokasian keuangan Himatika periode berjalan."</em></p></blockquote>
        <img src="../assets/img/footer/sekretariat.jpg" alt="" class="sumage">
        <p class="top-post-title" >Divisi Kesekretariatan</p>
        <p class="top-post-title-bot">Kepala Divisi :</p>
        <p class="top-post-title-bot">{{ $str->k_keset }}</p>
        <p class="top-post-title-bot">Staff Ahli :</p>
        <p class="top-post-title-bot">{{ $str->s_keset }}
       
        </p>

        <blockquote><p><em>    "Devisi Kesekretariatan merupakan devisi yang berada dibawah komando langsung sekretaris umum. Devisi ini berwenang mengelola dan mengatur sepenuhnya sekretariat Himatika periode berjalan. untuk mengatur segala administrasi, surat menyurat, pengarsipan, pengadaan dan pengelolaan inventaris, serta pengelolaan sekretariat bersama. Dalam periode kepengurusan ini, Devisi Kesekretariatan akan berusaha semaksimal mungkin dalam tata kelola administrasi."</em></p></blockquote>
        <!-- Batas -->
        
        <img src="../assets/img/footer/kewirausahaan.jpg" alt="" class="sumage">
        <p class="top-post-title" >Divisi Kewirausahaan</p>
        <p class="top-post-title-bot">Kepala Bidang :</p>
        <p class="top-post-title-bot">{{ $str->k_kewi }}
        
        </p>
        <p class="top-post-title-bot">Staff Ahli :</p>
        <p class="top-post-title-bot">{{ $str->s_kewi }}
        
        </p>

        <blockquote><p><em>    "Bidang Pengembangan Sumber Daya Mahasiswa berwenang merancang, mengorganisasi, menjalankan, dan mengontrol proses kaderisasi, merancang kegiatan pengembangan potensi yang bersifat spiritual dan emosional. serta bertanggung jawab mengadakan kaderisasi untuk anggota biasa Himatika, melakukan kaderisasi lanjutan untuk anggota aktif Himatika, mengawasi keadaan sumber daya Himatika dan melakukan suatu tindakan untuk
memetakan serta mengembangkan potensinya, merancang dan menjalankan kegiatan yang bertujuan untuk meningkatkan kualitas anggota aktif dan biasa Himatika."</em></p></blockquote>
            <!-- batas -->
        <img src="../assets/img/footer/psdm.jpg" alt="" class="sumage">
        <p class="top-post-title" >Bidang Pengembangan Sumber Daya Mahasiswa</p>
        <p class="top-post-title-bot">Kepala Bidang :</p>
        <p class="top-post-title-bot">{{ $str->k_psdm }}
        
        </p>
        <p class="top-post-title-bot">Staff Ahli :</p>
        <p class="top-post-title-bot">{{ $str->s_psdm }}
        
        </p>

        <blockquote><p><em>    "Bidang Pengembangan Sumber Daya Mahasiswa berwenang merancang, mengorganisasi, menjalankan, dan mengontrol proses kaderisasi, merancang kegiatan pengembangan potensi yang bersifat spiritual dan emosional. serta bertanggung jawab mengadakan kaderisasi untuk anggota biasa Himatika, melakukan kaderisasi lanjutan untuk anggota aktif Himatika, mengawasi keadaan sumber daya Himatika dan melakukan suatu tindakan untuk
memetakan serta mengembangkan potensinya, merancang dan menjalankan kegiatan yang bertujuan untuk meningkatkan kualitas anggota aktif dan biasa Himatika."</em></p></blockquote>
            <!-- batas -->
        <!-- Batas -->
        <img src="../assets/img/footer/akademik.jpg" alt="" class="sumage">
        <p class="top-post-title" >Bidang Akademik</p>
        <p class="top-post-title-bot">Kepala Bidang :</p>
        <p class="top-post-title-bot">{{ $str->k_aka }}
        
        </p>
        <p class="top-post-title-bot">Staff Ahli :</p>
        <p class="top-post-title-bot">{{ $str->s_aka }}
        
        </p>

        <blockquote><p><em>    "Bidang Akademik memiliki wewenang mengadakan kegiatan yang dapat meningkatkan potensi akademik anggota aktif dan biasa Himatika, melibatkan anggota aktif dan biasa Himatika dalam kegiatan-kegiatan yang dapat meningkatkan potensi akademik, membentuk tim yang dapat mendukung pencapaian akademis. Bidang Akademik bertanggung jawab memanajemen informasi dan sumber daya yang dapat mendukung pencapaian akademis anggota aktif dan biasa Himatika, memantau perkembangan akademis anggota aktif dan biasa Himatika, sebagai fasilitator potensi akademik anggota aktif dan biasa Himatika."</em></p></blockquote>
            <!-- batas -->
        <img src="../assets/img/footer/humas.jpg" alt="" class="sumage">
        <p class="top-post-title" >Bidang Hubungan Masyarakat dan Informasi</p>
        <p class="top-post-title-bot">Kepala Bidang :</p>
        <p class="top-post-title-bot">{{ $str->k_humas }}
        
        </p>
        <p class="top-post-title-bot">Staff Ahli :</p>
        <p class="top-post-title-bot">{{ $str->s_humas }}
        
        </p>

        <blockquote><p><em>    "Bidang Hubungan Masyarakat dan Informasi memiliki wewenang mewakili Himatika dalam hubungan eksternal organisasi Himatika, menjalin kerja sama dengan lembaga maupun non-lembaga eksternal Himatika, melakukan penyaringan terhadap semua informasi atau data yang masuk di Himatika. Bidang ini bertanggung jawab menciptakan hubungan yang baik antar lembaga maupun non-lembaga baik internal maupun eksternal, mengumpulkan dan menyebarkan segala bentuk informasi atau data yang berhubungan maupun tidak dengan Himatika."</em></p></blockquote>
            <!-- batas -->
        <img src="../assets/img/footer/olahraga.jpg" alt="" class="sumage">
        <p class="top-post-title" >Bidang Olahraga dan Seni</p>
        <p class="top-post-title-bot">Kepala Bidang :</p>
        <p class="top-post-title-bot">{{ $str->k_seni }}
        
        </p>
        <p class="top-post-title-bot">Staff Ahli :</p>
        <p class="top-post-title-bot">{{ $str->s_seni }}</p>

        <blockquote><p><em>    "Bidang Olahraga dan Seni memiliki wewenang mengadakan kegiatan yang bernuansa olahraga dan seni, aktif berpartisipasi dalam kegiatan olahraga dan seni di internal dan eksternal. Bidang ini Bertanggung jawab memetakan serta mengembangkan potensi, minat dan bakat yang ada pada anggota aktif dan biasa Himatika, sebagai fasilitator potensi, minat dan bakat anggota aktif dan biasa Himatika, membentuk tim olahraga dan seni, mengadakan pelatihan rutin olahraga dan seni."</em></p></blockquote>
            <!-- batas -->
        
        
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
@endforeach

@endsection