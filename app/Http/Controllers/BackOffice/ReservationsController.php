<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservations;

class ReservationsController extends Controller
{
    public function index()
    {
        $data["reservations"] = Reservations::all();
        return view('backOffice/reservations/index', $data);
    }
    // public function addIndex()
    // {
    //     return view('backOffice/reservations/add');
    // }
    public function updateIndex($id)
    {
        $data["evenement"] = Evenement::find($id);
        return view('backOffice/reservations/update', $data);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $contact = Contact::create([
            'totalBillets' => $input["data"]["totalBillets"],
            'totalPrice' => $input["data"]["totalPrice"],
            'date' => $input["data"]["Date"],
            'prenom' => $input["data"]["Prenom"],
            'nom' => $input["data"]["Nom"],
            'email' => $input["data"]["Email"],
            'adresse' => $input["data"]["Adresse"],
            'codePostal' => $input["data"]["Postal"],
            'ville' => $input["data"]["Ville"],
            'pays' => $input["data"]["Pays"]
        ]);
        $reservations = Reservations::find($id);
        $reservations->titre = $input["titre"];
        $reservations->description = $input["description"];
        $reservations->date = $input["date"];
        $reservations->lieu = $input["lieu"];
        $reservations->type = $input["type"];
        $reservations->fini = $input["fini"];
        $reservations->save();
        return redirect('backOffice/reservations');
    }
    public function add(Request $request)
    {
        $input = $request->all();
        $reservation = Reservations::create([
            'titre' => $input["titre"],
            'description' => $input["description"],
            'date' => $input["date"],
            'lieu' => $input["lieu"],
            'type' => $input["type"],
            'fini' => $input["fini"]
        ]);
        return redirect('backOffice/reservations');
    }
}
