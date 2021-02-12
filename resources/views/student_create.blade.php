@extends('layout')

@section('content')

<div class="container">
    <a href="student_show">Retour</a> <br><br>
    <form action="student_store" method="POST">@csrf
        <div class="form-grou">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" name="envoyer" id="envoyer">
        </div>

    </form>
</div>
@endsection
