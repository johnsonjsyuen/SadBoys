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

    public function account()
    {
        return view('pages.account');
    }

    public function help()
    {
        return view('pages.help');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
    public function feedback()
    {
        return view('pages.feedback');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function sitemap()
    {
        return view('pages.sitemap');
    }
    public function tools()
    {
        return view('pages.tools');
    }
    public function login()
    {
        return view('pages.login');
    }
}
