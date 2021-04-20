<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //index
    public function index(){
        $animals = Animal::all();
        return view('admin.animal.indexAnimal', compact('animals'));
    }
    //create
    public function create(){
        return view('admin.animal.createAnimal');
    }
    public function store(Request $request){
        $animal = new Animal();
        $animal->nom = $request->nom;
        $animal->age = $request->age;
        $animal->save();
        return redirect()->route('animal.index');
    }
    //show
    public function show(Animal $id){
        $animal = $id;
        return view('admin.animal.showAnimal', compact('animal'));
    }
    //delete
    public function destroy(Animal $id){
        $id->delete();
        return redirect()->route('animal.index');
    }
    //update
    public function edit(Animal $id){
        $animal = $id;
        return view('admin.animal.editAnimal', compact('animal'));
    }
    public function update(Animal $id, Request $request){
        $animal = $id;
        $animal->nom = $request->nom;
        $animal->age = $request->age;
        $animal->save();
        return redirect('/admin/animal/' . $animal->id);
    }
}
