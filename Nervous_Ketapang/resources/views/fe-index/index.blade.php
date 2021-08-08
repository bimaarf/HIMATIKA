@extends('layouts.frontend.main')
@section('content')
<!-- Home -->
@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button> 
<strong>{{ $message }}</strong>
</div>
@endif
    <div class="tab-content force-overfow force-overflow">
        <div class="tab-pane active" id="home">

            @include('fe-index.partial.home')

        </div><!-- tab-pane -->
        
        <div class="tab-pane" id="shop">
            
            @include('fe-index.partial.shop')
            
        </div><!-- tab-pane -->
        
            @if (Auth::check())
            
                <div class="tab-pane" id="link">
            
                @include('fe-index.partial.link')
            
                
                </div><!-- tab-pane -->

            @endif
            
        <div class="tab-pane null" id="result">
                
        <h2>result</h2>

        </div><!-- tab-pane -->

        <div class="tab-pane" id="profile">

        <h2>profil</h2>
                    
        </div><!-- tab-pane -->

        
    </div>

  
<!-- End Home -->
@endsection