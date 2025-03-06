<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Database\Seeder;

class QuestionResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Question 1
        $question1 = Question::create([
            'question' => 'Quelle est la capitale du Maroc?'
        ]);

        // Réponses pour question 1
        $question1->responses()->createMany([
            [
                'response' => 'Casablanca',
                'is_correct' => false
            ],
            [
                'response' => 'Rabat',
                'is_correct' => true
            ],
            [
                'response' => 'Marrakech',
                'is_correct' => false
            ],
            [
                'response' => 'Tanger',
                'is_correct' => false
            ]
        ]);

        // Question 2
        $question2 = Question::create([
            'question' => 'Quel est le langage de programmation utilisé par Laravel?'
        ]);

        // Réponses pour question 2
        $question2->responses()->createMany([
            [
                'response' => 'PHP',
                'is_correct' => true
            ],
            [
                'response' => 'JavaScript',
                'is_correct' => false
            ],
            [
                'response' => 'Python',
                'is_correct' => false
            ],
            [
                'response' => 'Java',
                'is_correct' => false
            ]
        ]);

        // Question 3
        $question3 = Question::create([
            'question' => 'Quelle commande est utilisée pour créer un nouveau contrôleur dans Laravel?'
        ]);

        // Réponses pour question 3
        $question3->responses()->createMany([
            [
                'response' => 'php artisan make:controller',
                'is_correct' => true
            ],
            [
                'response' => 'php artisan new:controller',
                'is_correct' => false
            ],
            [
                'response' => 'php artisan create:controller',
                'is_correct' => false
            ],
            [
                'response' => 'php artisan controller:make',
                'is_correct' => false
            ]
        ]);
    }
}