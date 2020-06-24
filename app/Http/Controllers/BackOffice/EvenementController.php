<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evenement;

class EvenementController extends Controller
{
    public function apiGetAll(){
        return Evenement::all();
    }
    public function index()
    {
        $data["evenements"] = Evenement::all();
        return view('backOffice/evenement/index', $data);
    }
    public function add(Request $request)
    {
        $input = $request->all();
        // dump($input['titre']);
        // die;
        $evenement = Evenement::create([
            'titre' => "test",
            'description' => "ici",
            'date' => $input["date"],
            'lieu' => $input["lieu"],
            'type' => $input["type"],
            'fini' => $input["fini"]
        ]);
        // $evenement = Evenement::create($request->all());
        dd($evenement);
        // return response()->json($article, 201);
    }
}
