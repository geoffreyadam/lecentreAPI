<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function index()
    {
        $data["newsletter"] = Newsletter::all();
        return view('backOffice/newsletter/index', $data);
    }
    public function add(Request $request)
    {
        $input = $request->all();
        $newsletter = Newsletter::create([
            'email' => $input["data"]["email"],
        ]);
        return $newsletter;
    }
    // public function addIndex()
    // {
    //     return view('backOffice/evenement/add');
    // }
    // public function updateIndex($id)
    // {
    //     $data["evenement"] = Evenement::find($id);
    //     return view('backOffice/evenement/update', $data);
    // }
    // public function update(Request $request, $id)
    // {
    //     $input = $request->all();
    //     $evenement = Evenement::find($id);
    //     $evenement->titre = $input["titre"];
    //     $evenement->description = $input["description"];
    //     $evenement->date = $input["date"];
    //     $evenement->lieu = $input["lieu"];
    //     $evenement->type = $input["type"];
    //     $evenement->fini = $input["fini"];
    //     $evenement->save();
    //     return redirect('backOffice/evenements');
    // }
    // public function add(Request $request)
    // {
    //     $input = $request->all();
    //     $evenement = Evenement::create([
    //         'titre' => $input["titre"],
    //         'description' => $input["description"],
    //         'date' => $input["date"],
    //         'lieu' => $input["lieu"],
    //         'type' => $input["type"],
    //         'fini' => $input["fini"]
    //     ]);
    //     return redirect('backOffice/evenements');
    // }
}
