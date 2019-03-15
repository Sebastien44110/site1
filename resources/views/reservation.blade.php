@extends('layouts/application')

@section('content')

<h1 class="text-center">Reservation</h1>

<form method="post">

        {{ csrf_field() }}


        <div class="form-group container">
                <label for="usr">nombre de places:</label>
                <input type="text" class="form-control" id="usr" name="nbplaces">
        </div>

        @if ($errors->has('nbplaces'))

        <p class="text-center"> {{$errors->first('nbplaces')}} </p>
      
        @endif

        <div class="form-group container">
                <label for="sel1">Dates disponibles:</label>
                <select class="form-control" id="sel1" name="date">
                  <option>date 1</option>
                  <option>date 2</option>
                  <option>date 3</option>
                  <option>date 4</option>
                </select>
        </div> 

        @if ($errors->has('date'))

        <p class="text-center"> {{$errors->first('date')}} </p>
      
        @endif

        <div class="form-group container">
          <label for="sel1">Horaires disponibles:</label>
          <select class="form-control" id="sel1" name="optradio">
            <option>15h00</option>
            <option>17h20</option>
            <option>19h30</option>
          </select>
        </div> 

        @if ($errors->has('optradio'))

        <p class="text-center"> {{$errors->first('optradio')}} </p>
      
        @endif

    <button type="submit" class="btn btn-primary" style="margin-left:25em" name="button">Reserver</button>
@endsection       