<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('pages.questions-and-answers',compact('questions'));
    }
}
