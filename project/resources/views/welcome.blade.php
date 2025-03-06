@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 md:pr-10 mb-10 md:mb-0 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Apprenez à coder, <br>Changez votre avenir</h1>
                <p class="text-lg text-gray-700 mb-8">YouCode est une école innovante qui forme les talents numériques de demain. Rejoignez notre communauté et devenez un développeur web professionnel.</p>
                <a href="" class="px-8 py-3 bg-primary text-white font-semibold rounded-md hover:bg-primary/90 transition-colors shadow-md">Découvrez nos programmes</a>
            </div>
            
            <div class="md:w-1/2">
                <img src="{{ asset('images/hero-image.jpg') }}" alt="Étudiants de YouCode" class="rounded-lg shadow-xl w-full">
            </div>
        </div>
    </section>
    
    <!-- Featured Programs Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nos programmes spécialisés</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">Des programmes de formation adaptés aux besoins du marché, conçus pour vous rendre opérationnel rapidement.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Programme Full Stack -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/développement.jpg') }}" alt="Développement Full Stack" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-primary text-white text-sm font-semibold px-3 py-1 rounded-full">Populaire</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Développement Full Stack</h3>
                        <p class="text-gray-700 mb-4">Maîtrisez les technologies front-end et back-end pour devenir un développeur polyvalent capable de créer des applications web complètes.</p>
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Ce que vous apprendrez :</h4>
                            <ul class="space-y-1 text-gray-700">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    HTML, CSS, JavaScript
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    React.js, Vue.js
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    PHP, Laravel
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    MySQL, MongoDB
                                </li>
                            </ul>
                        </div>
                        <a href="" class="inline-block px-6 py-3 border-2 border-primary text-primary font-semibold rounded-md hover:bg-primary hover:text-white transition-colors">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Programme Data Science -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/data.jpg') }}" alt="Data Science" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-primary text-white text-sm font-semibold px-3 py-1 rounded-full">Populaire</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Data Science & IA</h3>
                        <p class="text-gray-700 mb-4">Apprenez à analyser les données et à créer des modèles d'intelligence artificielle pour résoudre des problèmes complexes.</p>
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Ce que vous apprendrez :</h4>
                            <ul class="space-y-1 text-gray-700">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    Python, R
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    Machine Learning
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    Analyse de données
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    Visualisation de données
                                </li>
                            </ul>
                        </div>
                        <a href="" class="inline-block px-6 py-3 border-2 border-primary text-primary font-semibold rounded-md hover:bg-primary hover:text-white transition-colors">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pourquoi choisir YouCode ?</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">Une expérience d'apprentissage innovante qui vous prépare au monde professionnel.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Apprentissage par projets</h3>
                    <p class="text-gray-700">Apprenez en réalisant des projets concrets qui simulent les défis du monde professionnel.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mentors expérimentés</h3>
                    <p class="text-gray-700">Apprenez auprès de professionnels expérimentés travaillant dans des entreprises de pointe.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Insertion professionnelle</h3>
                    <p class="text-gray-700">Bénéficiez de notre réseau d'entreprises partenaires pour trouver votre premier emploi après la formation.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-pink-500 to-primary">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Prêt à démarrer votre carrière dans la tech ?</h2>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-8">Rejoignez YouCode et transformez votre passion pour la technologie en compétences professionnelles recherchées.</p>
            <a href="" class="px-8 py-4 bg-white text-primary font-bold rounded-md hover:bg-gray-100 transition-colors shadow-lg">Postuler maintenant</a>
        </div>
    </section>
@endsection