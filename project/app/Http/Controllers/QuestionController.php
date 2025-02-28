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
        $questions = Question::with('Response')->get();
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
        foreach ($request->input('responses') as $index => $ResponseContent) {
            
            
            $Response = new Response([
                'response' => $ResponseContent,
                'is_correct' => in_array($index + 1, $request->input('is_correct')),
            ]);

            $question->Responses()->save($Response);
        }
    
        return redirect()->route('questions.index')->with('success', 'La question a été créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {    
        $question = Question::with('Responses')->findOrFail($id);
        return view('admin.edit', compact('question'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->only('question'));
    
        $question->Responses()->delete();
    
        foreach ($request->input('responses') as $index => $ResponseContent) {
            $Response = new Response([
                'content' => $ResponseContent,
                'is_correct' => in_array($index + 1, (array)$request->input('is_correct')),
            ]);
            $question->Responses()->save($Response);
        }
    
        return redirect()->route('admin.dashboard')->with('success', 'La question a été mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
    
        return redirect()->route('admin.dashboard')->with('success', 'La question a été supprimée avec succès.');
    }
}