<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\ServiceOffering;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $services = ServiceOffering::take(3)->get();
        $advantages = Advantage::all();

        return view('pages.home', compact('services', 'advantages'));
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = ServiceOffering::all();

        return view('pages.services', compact('services'));
    }
}
