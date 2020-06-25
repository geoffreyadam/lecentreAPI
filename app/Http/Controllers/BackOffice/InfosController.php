<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Infos;

class InfosController extends Controller
{
    public function index()
    {
        $data["infos"] = Infos::all();
        return view('backOffice/infos/index', $data);
    }
    public function addIndex()
    {
        return view('backOffice/infos/add');
    }
    public function updateIndex($id)
    {
        $data["info"] = Infos::find($id);
        return view('backOffice/infos/update', $data);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $evenement = Infos::find($id);
        $evenement->ouvert = $input["ouvert"];
        $evenement->reouverture = $input["reouverture"];
        $evenement->acces_tram = $input["acces_tram"];
        $evenement->acces_bus = $input["acces_bus"];
        $evenement->horaires_fermé = $input["horaires_fermé"];
        $evenement->horaires_ouvert = $input["horaires_ouvert"];
        $evenement->horaires_plus = $input["horaires_plus"];
        $evenement->save();
        return redirect('backOffice/infos');
    }
    public function add(Request $request)
    {
        $input = $request->all();
        $infos = Infos::create([
            'ouvert' => $input["ouvert"],
            'reouverture' => $input["reouverture"],
            'acces_tram' => $input["acces_tram"],
            'acces_bus' => $input["acces_bus"],
            'horaires_fermé' => $input["horaires_fermé"],
            'horaires_ouvert' => $input["horaires_ouvert"],
            'horaires_plus' => $input["horaires_plus"]
        ]);
        return redirect('backOffice/infos');
    }
}
