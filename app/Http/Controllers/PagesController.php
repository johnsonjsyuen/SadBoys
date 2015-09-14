<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()//return index page
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function help()
    {
        return view('pages.help');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
}
