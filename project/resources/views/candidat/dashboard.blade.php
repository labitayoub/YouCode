@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Quiz</h1>
    <form action="{{ route('quiz.submit') }}" method="POST">
        @csrf
        @foreach($questions as $question)
            <h3>{{ $question->question }}</h3>
            @foreach(['option_1', 'option_2', 'option_3', 'option_4'] as $option)
                <label>
                    <input type="radio" name="question_{{ $question->id }}" value="{{ $question->$response }}" required>
                    {{ $question->$option }}
                </label><br>
            @endforeach
        @endforeach
        <button type="submit">Soumettre</button>
    </form>
</div>
@endsection