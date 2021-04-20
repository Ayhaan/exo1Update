@extends('layouts.index')

@section('content')
    @include('partials.bo.navigation')
    <div class="my-5">
        <h1 class="mb-0">Edit animals</h1>
        <p >Formulaire de modification</p>
    </div>
    <form action="{{route('animal.update', $animal->id)}}" method="POST" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nom">Nom de l'animal</label>
          <input type="text" class="form-control" id="nom" name="nom" value="{{$animal->nom}}" placeholder="nom">
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" class="form-control" id="age" name="age" value="{{$animal->age}}" placeholder="age">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection