@extends('layouts.backend.main')
@section('struktur.dashboard', 'active')
@section('content')
@if(Auth::user())
    
    @endif
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Edit Struktur Kepengurusan dan Program Kerja</strong>
            </h5>
          </div>
          <div class="card-body">
              @foreach ($struktur as $item)
              <form method="POST" action="{{ route('admin.struktur.ubah',['id'=>$item->id]) }}" enctype="multipart/form-data" >
                @csrf
                
                <div class="form-group">
                    <label for="cover_img" class="form-label">Logo Profil Kami</label>
                    <input type="file" name="cover_img" class="form-control">
                </div>
                
                        <div class="form-group">
                            <label for="Visi" class="form-label  mt-2">Visi</label>
                            <input type="text" class="form-control" id="Visi" name="Visi" value="{{ $item->Visi }}" required />
                        </div>
                        
                        <div class="form-group">
                            <label for="Misi_a" class="form-label  mt-2">Misi point a</label>
                            <input type="text" class="form-control" id="Misi_a" name="Misi_a" value="{{ $item->Misi_a }}" required />
                        </div>
                        
                        <div class="form-group">
                            <label for="Misi_b" class="form-label  mt-2">Misi point b</label>
                            <input type="text" class="form-control" id="Misi_b" name="Misi_b" value="{{ $item->Misi_b }}" required />
                        </div>
                        
                        <div class="form-group">
                            <label for="Misi_c" class="form-label  mt-2">Misi point c</label>
                            <input type="text" class="form-control" id="Misi_c" name="Misi_c" value="{{ $item->Misi_c }}" required />
                        </div>
                        <div class="form-group">
                            <label for="Misi_d" class="form-label  mt-2">Misi point d</label>
                            <input type="text" class="form-control" id="Misi_d" name="Misi_d" value="{{ $item->Misi_d }}" required />
                        </div>
                        <div class="form-group">
                            <label for="Misi_e" class="form-label  mt-2">Misi point e</label> <small class="text-danger"><i>*(-) jika tidak diisi</i></small>
                            <input type="text" class="form-control" id="Misi_e" name="Misi_e" value="{{ $item->Misi_e }}" required />
                        </div>
                        <div class="form-group">
                            <label for="ketua" class="form-label  mt-2">Ketua Umum</label>
                            <input type="text" class="form-control" id="ketua" name="ketua" value="{{ $item->ketua }}" required />
                        </div>
                        <div class="form-group">
                            <label for="sekretaris" class="form-label  mt-2">Sekretaris Umum</label>
                            <input type="text" class="form-control" id="sekretaris" name="sekretaris" value="{{ $item->sekretaris }}" required />
                        </div>
                        <div class="form-group">
                            <label for="bendahara" class="form-label  mt-2">Bendahara Umum</label>
                            <input type="text" class="form-control" id="bendahara" name="bendahara" value="{{ $item->bendahara }}" required />
                        </div>
                        <div class="form-group">
                            <label for="k_keset" class="form-label  mt-2">Kepala Kesekretariatan</label>
                            <input type="text" class="form-control" id="k_keset" name="k_keset" value="{{ $item->k_keset }}" required />
                        </div>
                        <div class="form-group">
                            <label for="s_keset" class="form-label  mt-2">Staff Kesekretariatan</label>
                            <input type="text" class="form-control" id="s_keset" name="s_keset" value="{{ $item->s_keset }}" required />
                        </div>
                        <div class="form-group">
                            <label for="k_kewi" class="form-label  mt-2">Kepala Kewirausahaan</label>
                            <input type="text" class="form-control" id="k_kewi" name="k_kewi" value="{{ $item->k_kewi }}" required />
                        </div>
                        <div class="form-group">
                            <label for="s_kewi" class="form-label  mt-2">Staff Kewirausahaan</label>
                            <input type="text" class="form-control" id="s_kewi" name="s_kewi" value="{{ $item->s_kewi }}" required />
                        </div>
                        <div class="form-group">
                            <label for="k_psdm" class="form-label  mt-2">Kepala Pengembang Sumber Daya Manusia</label>
                            <input type="text" class="form-control" id="k_psdm" name="k_psdm" value="{{ $item->k_psdm }}" required />
                        </div>
                        <div class="form-group">
                            <label for="s_psdm" class="form-label  mt-2">Staff Pengembang Sumber Daya Manusia</label>
                            <input type="text" class="form-control" id="s_psdm" name="s_psdm" value="{{ $item->s_psdm }}" required />
                        </div>
                        <div class="form-group">
                            <label for="k_aka" class="form-label  mt-2">Kepala Akademik</label>
                            <input type="text" class="form-control" id="k_aka" name="k_aka" value="{{ $item->k_aka }}" required />
                        </div>
                        <div class="form-group">
                            <label for="s_aka" class="form-label  mt-2">Staff Akademik</label>
                            <input type="text" class="form-control" id="s_aka" name="s_aka" value="{{ $item->s_aka }}" required />
                        </div>
                        <div class="form-group">
                            <label for="k_humas" class="form-label  mt-2">Kepala Hubungan Masyarakat dan Informasi</label>
                            <input type="text" class="form-control" id="k_humas" name="k_humas" value="{{ $item->k_humas }}" required />
                        </div>
                        <div class="form-group">
                            <label for="s_humas" class="form-label  mt-2">Staff Hubungan Masyarakat dan Informasi</label>
                            <input type="text" class="form-control" id="s_humas" name="s_humas" value="{{ $item->s_humas }}" required />
                        </div>
                        <div class="form-group">
                            <label for="k_seni" class="form-label  mt-2">Kepala Olahraga dan Seni</label>
                            <input type="text" class="form-control" id="k_seni" name="k_seni" value="{{ $item->k_seni }}" required />
                        </div>
                        <div class="form-group">
                            <label for="s_seni" class="form-label  mt-2">Staff Olahraga dan Seni</label>
                            <input type="text" class="form-control" id="s_seni" name="s_seni" value="{{ $item->s_seni }}" required />
                        </div>
                        
                        
                        <button  type="submit" class="btn btn-primary mt-3" id="kirimKomen">Submit</button>
                        <a href="#" class="btn btn-outline-primary">Cencel</a>
                        
                    </form>
                    @endforeach
          </div>
        </div>
    </section>
@endsection
