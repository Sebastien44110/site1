@extends('layouts/application')

@section('content')

<h1 class="text-center">vos reservations</h1>

<ul>

    @foreach ($myreserv as  $myreserv)
    
    <li> {{$myreserv->nombre_de_places}} </li>
    <li> {{$myreserv->date}} </li>
    <li> {{$myreserv->horaire}} </li>
    


    @endforeach

</ul>

@endsection  