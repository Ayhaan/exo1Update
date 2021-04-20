@extends('layouts.index')

@section('content')
    @include('partials.bo.navigation')
    <div class="my-5">
        <h1>SHOW animal : {{$animal->nom}}</h1>
        <a href="{{route('animal.index')}}" class="btn btn-primary">Retour home animal</a>

        <div class="row my-5">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nom de l'animal {{$animal->nom}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Age : {{$animal->age}}</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <form action="{{route('animal.delete', $animal->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection