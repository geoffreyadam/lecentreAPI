<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('backOffice/index', ['name' => 'James']);
    }
    public function evenementsIndex()
    {
        return view('backOffice/index', ['name' => 'James']);
    }
}
