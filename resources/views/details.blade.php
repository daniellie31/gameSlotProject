@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">


    <div class="container">
        
        <div class="content">
            <h1 style="text-align: center">{{ $Game->GameTitle }}</h1>

          
            <div style="display: flex; flex-direction:row; justify-content:space-evenly">
                <div style="width: 40%">
                    <p> {{ $Game->genres->GameGenre }}</p>
                    <p>{{ $Game->GameDesc }}</p>
                </div>
    
                <div style="width: 40%; float:right; display:inline-block; border:1px solid black">
                  
                        <p>{{ $Game->GamePegiRating }}</p>
                        <p> {{ $Game->GamePrice}}</p>

                        <button type="button" class="btn btn-primary btn-sm">Add to Cart</button>
    
                    
                </div>
            </div>
            
           
            
        </div>
        

    </div>
    



@endsection


