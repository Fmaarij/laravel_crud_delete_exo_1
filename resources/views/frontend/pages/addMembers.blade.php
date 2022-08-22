@extends('frontend.layouts.index')
@section('content')


<h1>Ajouter des membres</h1>
<form action="addmembers" methode="post">
    @csrf
<label for="">Age</label>
<input type="number" name="age">
<label for="">Nom</label>
<input type="text" name="nom">
<label for="">Genre</label>
<input type="text" name="genre">

<button type="submit">Ajouter</button>
</form>

@endsection
