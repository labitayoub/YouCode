@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Dashboard Admin</h1>
    <h2>Réponses des candidats</h2>
    <table>
        <tr>
            <th>Question</th>
      
            <th>Réponse</th>
        </tr>
        @foreach($questions as $question)
            <tr>
                <td>{{ $question->question }}</td>

                <td>{{ $question->reponse }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection