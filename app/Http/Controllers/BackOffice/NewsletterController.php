<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newsletter;
use Maatwebsite\Excel\Facades\Excel;

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
            'email' => $input["email"],
        ]);
        return $newsletter;
    }
    public function export()
    {
        // return Excel::download($newsletter, 'disney.csv');
        // return Excel::download($export, 'newsletter.csv');
            
        return redirect('backOffice/newsletter');
    }
}
