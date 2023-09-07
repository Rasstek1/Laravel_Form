<!-- resources/views/form.blade.php -->
@extends('layout')

@section('title', 'Formulaire Laravel')

@section('content')
    <h1>Formulaire Laravel</h1>
    <form method="POST" action="{{ route('traiter-formulaire') }}";>
        @csrf <!-- Protection contre les attaques CSRF -->

        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail :</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message :</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection
