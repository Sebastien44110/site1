@extends('layouts/application')

@section('content')

<h1 class="text-center">Connexion</h1>

 <form action="/connect" method="post">

  {{ csrf_field() }}

  <div class="form-group text-center mt-5">
    <label for="email">Email address:</label>
    <input type="email" class="form-control w-50 mx-auto" id="email" name="mail">
  </div>

  @if ($errors->has('mail'))

      <p class="text-center"> {{$errors->first('mail')}} </p>

  @endif

  <div class="form-group text-center">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control w-50 mx-auto" id="pwd" name="mdp">
  </div>

  @if ($errors->has('mdp'))

  <p class="text-center"> {{$errors->first('mdp')}} </p>

  @endif

  <button type="submit" class="btn btn-primary" style="margin-left:25em" name="button">Connexion</button>
</form> 

@endsection
