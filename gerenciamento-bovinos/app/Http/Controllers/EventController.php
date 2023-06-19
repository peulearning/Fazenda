<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class EventController extends Controller
{
    public function index() {

        $animals = Animal::all();

       return view('welcome', ['animals' => $animals]);
    }

    public function create() {
        return view('animais.create');
    }

    public function store(Request $request) {



        $animals = new Animal;

        $animals-> id = $request->id;
        $animals->L_Leite = $request->L_Leite;
        $animals-> QTD_Racao = $request->QTD_Racao;
        $animals->Peso = $request->Peso;
        $animals->Data_Nasc = $request->Data_Nasc;
        $animals->Abate = $request->Abate;

        $animals->save();

        return redirect('/')->with('msg', 'Gado Cadastrado com sucesso !');

    }

}
