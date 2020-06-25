<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tarifs;

class TarifsController extends Controller
{
    public function apiGetAll(){
        return Tarifs::all();
    }
    public function index()
    {
        $data["tarifs"] = Tarifs::all();
        return view('backOffice/tarifs/index', $data);
    }
    public function addIndex()
    {
        return view('backOffice/tarifs/add');
    }
    public function updateIndex($id)
    {
        $data["tarif"] = Tarifs::find($id);
        return view('backOffice/tarifs/update', $data);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $tarif = Tarifs::find($id);
        $tarif->nom = $input["nom"];
        $tarif->info1 = $input["info1"];
        $tarif->info2 = $input["info2"];
        $tarif->info3 = $input["info3"];
        $tarif->info4 = $input["info4"];
        $tarif->info5 = $input["info5"];
        $tarif->prix = $input["prix"];
        $tarif->save();
        return redirect('backOffice/tarifs');
    }
    public function add(Request $request)
    {
        $input = $request->all();
        $tarifs = Tarifs::create([
            'nom' => $input["nom"],
            'info1' => $input["info1"],
            'info2' => $input["info2"],
            'info3' => $input["info3"],
            'info4' => $input["info4"],
            'info5' => $input["info5"],
            'prix' => $input["prix"]
        ]);
        return redirect('backOffice/tarifs');
    }
}
