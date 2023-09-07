<!-- resources/views/formdata.blade.php -->
@extends('layout')

@section('content')
    <h1>Données du formulaire</h1>
    <p>Nom: {{ $nom }}</p>
    <p>Prénom: {{ $prenom }}</p>
    <p>E-mail: {{ $email }}</p>
    <p>Téléphone: {{ $telephone }}</p>
    <p>Message: {{ $message }}</p>

@endsection

