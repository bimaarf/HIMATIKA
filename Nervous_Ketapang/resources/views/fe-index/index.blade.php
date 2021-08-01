@extends('layouts.frontend.main')
@section('content')
<!-- Home -->
    <div class="tab-content">
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