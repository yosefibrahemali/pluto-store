@extends('layouts.app')
@section('content')
<div>

   
   
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> shop
                    
                   
                </div>
                
                
            </div>
        </div>
        @livewire('card')
        
        

        
    </main>
    
</div>
@endsection


