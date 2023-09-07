<!-- resources/views/home.blade.php -->
@extends('layout')

@section('content')
    <h1>Bienvenue sur mon site</h1>
    <a href="{{ url('/form') }}">Aller au formulaire</a>
@endsection

