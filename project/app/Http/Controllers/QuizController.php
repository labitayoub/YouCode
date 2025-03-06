<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Response;

class QuizController extends Controller
{
    public function index()
{
    $questions = Question::all();
    return view('quiz', compact('questions'));
}
public function submit(Request $request)
{
    $questions = Question::all();
    foreach ($questions as $question) {
        $user_answer = $request->input('question_'.$question->id);
        $is_correct = ($user_answer == $question->correct_answer);

        Response::create([
            'user_id' => auth()->id(),
            'question_id' => $question->id,
            'user_answer' => $user_answer,
            'is_correct' => $is_correct
        ]);
    }

    return redirect()->route('quiz.index')->with('success', 'Merci pour vos réponses !');
}
public function adminDashboard()
{
    $questions = Question::all();
    $responses = Response::with('question', 'user')->get();

    return view('dashboard', compact('questions', 'responses'));
}

}
