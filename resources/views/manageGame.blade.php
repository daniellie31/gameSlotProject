@extends('layout')
@section('title', 'Manage Game')

@section('content')
<link rel="stylesheet" href="{{asset('css/manageGame.css')}}">

<div class="container">


  <a href="addGame"><button class="addGame">Add Game</button></a>

    <table class="table">
      <thead>
        <tr>
       
          <th scope="col">Game Title</th>
          <th scope="col">PEGI Rating</th>
          <th scope="col">Game Genre</th>
          <th scope="col">Game Price</th>
        </tr>
      </thead>
      <tbody>
  
        @foreach ($games as $g)
        <tr>
         
          <td>  <img src="{{Storage::url('images/'.$g->GameImage)}}" alt="image" />  {{ $g->GameTitle }}</td>
          <td>{{ $g->GamePegiRating }}</td>
          <td>{{ $g->genres->GameGenre }}</td>
          <td>{{ $g->GamePrice }}</td>
          <td><button type="button" class="button">Edit</button></td>
          <td><button type="button" class="delete">Delete</button></td>
        </tr>
        @endforeach
       
      
      </tbody>
    </table>

</div>
{{-- 
<table class="table table-sm" >
  <thead>
    <tr>
   
      <th scope="col">Game Title</th>
      <th scope="col">PEGI Rating</th>
      <th scope="col">Game Genre</th>
      <th scope="col">Game Price</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($games as $g)
    <tr>
     
      <td>  <img src="{{Storage::url('images/'.$g->GameImage)}}" alt="image" />  {{ $g->GameTitle }}</td>
      <td>{{ $g->GamePegiRating }}</td>
      <td>{{ $g->genres->GameGenre }}</td>
      <td>{{ $g->GamePrice }}</td>
      <td><button type="button" class="button">Edit</button></td>
      <td><button type="button" class="delete">Delete</button></td>
    </tr>
    @endforeach
   
  
  </tbody>
</table> --}}


@endsection
