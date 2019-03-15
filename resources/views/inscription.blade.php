@extends('layouts/application')

@section('content')

<h1 class="text-center">Inscription</h1>

 <form action="/inscript" method="post">

  {{ csrf_field() }}

  <div class="form-group text-center mt-5">
    <label for="name">Nom:</label>
    <input type="text" class="form-control w-50 mx-auto" id="name" name="nom">
  </div>

  @if ($errors->has('nom'))

      <p class="text-center"> {{$errors->first('nom')}} </p>

  @endif

  <div class="form-group text-center mt-5">
    <label for="surname">Prenom:</label>
    <input type="text" class="form-control w-50 mx-auto" id="surname" name="prenom">
  </div>

  @if ($errors->has('prenom'))

      <p class="text-center"> {{$errors->first('prenom')}} </p>

  @endif

  <div class="form-group text-center mt-5">
    <label for="phone">Numero de téléphone:</label>
    <input type="text" class="form-control w-50 mx-auto" id="phone" name="tel">
  </div>

  @if ($errors->has('tel'))

      <p class="text-center"> {{$errors->first('tel')}} </p>

  @endif

  <div class="form-group text-center mt-5">
    <label for="email">Email address:</label>
    <input type="email" class="form-control w-50 mx-auto" id="email" name="email">
  </div>

  @if ($errors->has('email'))

      <p class="text-center"> {{$errors->first('email')}} </p>

  @endif

  <div class="form-group text-center">
    <label for="pwd">Mots de passe:</label>
    <input type="password" class="form-control w-50 mx-auto" id="pwd" name="password">
  </div>

  @if ($errors->has('password'))

  <p class="text-center"> {{$errors->first('password')}} </p>

  @endif

  <div class="form-group text-center">
    <label for="pwd">Confirmer mots de passe:</label>
    <input type="password" class="form-control w-50 mx-auto" id="pwd" name="password_confirmation">
  </div>

  @if ($errors->has('password_confirmation'))

  <p class="text-center"> {{$errors->first('password_confirmation')}} </p>

  @endif

  <button type="submit" class="btn btn-primary" style="margin-left:45em" name="button">Inscription</button>
</form> 

@endsection