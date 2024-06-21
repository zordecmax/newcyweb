<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsAndAnswersController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('pages.questions-and-answers',compact('questions'));
    }
}
