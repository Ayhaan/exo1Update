@extends('layouts.index')

@section('content')
    @include('partials.bo.navigation')
    <div class="my-5">
        <h1>Récap animals</h1>
        <div class="row">
            @foreach ($animals as $animal)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nom de l'animal {{$animal->nom}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Age : {{$animal->age}}</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('animal.show', $animal->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('animal.edit', $animal->id)}}" class="btn btn-success my-1">Update</a>
                                <form action="{{route('animal.delete', $animal->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>                        
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection