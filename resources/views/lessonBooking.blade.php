@extends('layouts.app')

@section('content')

    <h1 class="welcome">Bienvenue {{ $user->name }}</h1>
    <br><br>
    <p class='text-center'><strong>{{ $user->name }} merci de choisir parmis les horaires suivant afin de planifier votre prochain cours :</strong></p>

@stop

@section('js')

    <script>
        // ajax
    </script>

@stop