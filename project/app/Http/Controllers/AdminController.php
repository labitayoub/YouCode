<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Response;

class AdminController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $responses = Response::with('questions')->get();
        return view('admin.dashboard', compact('questions', 'responses'));
    }
}
//     // Ajouter une nouvelle question
//     public function addQuestion(Request $request)
//     {
//         $request->validate([
//             'question' => 'required|string',
//             'A' => 'required|string',
//             'B' => 'required|string',
//             'C' => 'required|string',
//             'D' => 'required|string',
//             'reponse' => 'required|string',
//         ]);

//         Question::create($request->all());

//         return redirect()->route('admin.dashboard')->with('success', 'Question ajoutée avec succès !');
//     }

//     // Supprimer une question
//     public function deleteQuestion($id)
//     {
//         $question = Question::findOrFail($id);
//         $question->delete();

//         return redirect()->route('admin.dashboard')->with('success', 'Question supprimée avec succès !');
//     }
// }

