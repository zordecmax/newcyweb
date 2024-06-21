<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Client;
use App\Models\Project;
use App\Models\Question;
use App\Models\ServiceOffering;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $services = ServiceOffering::take(3)->get();
        $advantages = Advantage::all();
        $clients = Client::take(3)->get();
        $projects = Project::take(9)->get();
        $questions = Question::all();
        return view('pages.home', compact('services', 'advantages', 'clients', 'questions', 'projects'));
    }

    public function portfolio()
    {
        $projects = Project::all();


        return view('pages.portfolio', compact('projects'));
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
