@extends('layouts.admin')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Éditer la question</h1>

        <form action="{{ route('questions.update', $question) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="question" class="block text-sm font-medium text-gray-700 mb-2">Question :</label>
                <input type="text" name="question" id="question" value="{{ $question->question }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <h2 class="text-2xl font-bold mb-4">Réponses</h2>

            @foreach ($question->responses as $index => $response)
                <div class="mb-4">
                    <label for="response_{{ $index }}" class="block text-sm font-medium text-gray-700 mb-2">Réponse {{ $index + 1 }} :</label>
                    <input type="text" name="responses[]" id="response_{{ $index }}" value="{{ $response->response }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" name="is_correct[]" id="is_correct_{{ $index }}" value="{{ $index + 1 }}" {{ $response->is_correct ? 'checked' : '' }} class="mr-2">
                    <label for="is_correct_{{ $index }}" class="text-sm font-medium text-gray-700">Correcte</label>
                </div>
            @endforeach

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Enregistrer les modifications
            </button>
        </form>
    </div>
@endsection