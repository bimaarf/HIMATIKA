@extends('layouts.frontend.main')
@section('content')
<!-- Home -->
<div class="tab-content force-overfow">
        
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

                <div class="tab-pane" id="profile">
        
                    @include('fe-index.partial.profile')
                            
                </div>
            @endif
            
                


    </div>
    
  
<!-- End Home -->
@endsection