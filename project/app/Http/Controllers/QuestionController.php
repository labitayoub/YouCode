<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Response;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('responses')->get();
        return view('admin.dashboard', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $question = Question::create($request->only('question'));
        
        if ($request->has('responses') && is_array($request->input('responses'))) {
            foreach ($request->input('responses') as $index => $responseContent) {
                if (!empty($responseContent)) { 
                    $response = new Response([
                        'response' => $responseContent,
                        'is_correct' => in_array($index + 1, (array)$request->input('is_correct', [])),
                    ]);

                    $question->responses()->save($response);
                }
            }
        }

        return redirect()->route('questions.index')->with('success', 'La question a été créée avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $question = Question::with('responses')->findOrFail($id);
        return view('admin.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->only('question'));

        // Supprime les anciennes réponses
        $question->responses()->delete();

        // Vérifiez si 'responses' existe dans la requête
        if ($request->has('responses') && is_array($request->input('responses'))) {
            foreach ($request->input('responses') as $index => $responseContent) {
                if (!empty($responseContent)) { // Assurez-vous que la réponse n'est pas vide
                    $response = new Response([
                        'response' => $responseContent,
                        'is_correct' => in_array($index + 1, (array)$request->input('is_correct', [])),
                    ]);
                    $question->responses()->save($response);
                }
            }
        }

        return redirect()->route('admin.dashboard')->with('success', 'La question a été mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->responses()->delete();
        $question->delete();
        
        return redirect()->route('admin.dashboard')->with('success', 'La question a été supprimée avec succès.');
    }
}
