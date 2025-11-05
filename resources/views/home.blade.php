@extends('layouts.app')

@section('content')


<div class="container">
    
    <div class="flex justify-content-center align-item-center" >
        
                
                   
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        
    
</div>
@endsection
