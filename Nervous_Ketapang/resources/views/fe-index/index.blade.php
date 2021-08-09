@extends('layouts.frontend.main')
@section('content')
<!-- Home -->
<div class="tab-content force-overfow force-overflow">
        
        <div class="tab-pane active" id="home">

            @include('fe-index.partial.home')

        </div><!-- tab-pane -->
        
        <div class="tab-pane" id="shop">
            
            @include('fe-index.partial.shop')
            
        </div>
        
            @if (Auth::check())
            
                <div class="tab-pane" id="link">
            
                    @include('fe-index.partial.link')
            
                </div>

                {{-- Result --}}
                
                <div class="tab-pane null" id="result">
                    
                    @include('fe-index.partial.result')
        
                </div>

            @endif
            
                

        <div class="tab-pane" id="profile">

        <h2>profil</h2>
                    
        </div>

    </div>
    
  
<!-- End Home -->
@endsection