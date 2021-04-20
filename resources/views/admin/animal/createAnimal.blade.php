@extends('layouts.index')

@section('content')
    @include('partials.bo.navigation')
    <div class="my-5">
        <h1 class="mb-0">New animals</h1>
        <p >Formulaire d'ajout</p>
    </div>
    <form action="{{route('animal.store')}}" method="POST" class="w-50 mx-auto">
        @csrf
        <div class="form-group">
          <label for="nom">Nom de l'animal</label>
          <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
        </div>
        <div class="form-group">
          <label for="age">Password</label>
          <input type="number" class="form-control" id="age" name="age" placeholder="age">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection