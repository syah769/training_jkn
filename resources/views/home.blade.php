@extends('layouts.app')

@section('title', 'Home - Training JKN')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Hero Section -->
    <div class="bg-white rounded-lg shadow-md p-8 mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Training JKN</h1>
        <p class="text-gray-600 text-lg mb-6">
            Sistem training untuk memahami Laravel Blade templating dengan Tailwind CSS.
        </p>
        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
            Get Started
        </button>
    </div>

    <!-- Features Section -->
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="text-blue-600 text-3xl mb-4">📚</div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Blade Templates</h3>
            <p class="text-gray-600">
                Belajar cara guna extends, yield, section dalam Laravel Blade.
            </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="text-green-600 text-3xl mb-4">🎨</div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Tailwind CSS</h3>
            <p class="text-gray-600">
                Styling yang cepat dan responsive dengan utility-first CSS framework.
            </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="text-purple-600 text-3xl mb-4">⚡</div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Fast Development</h3>
            <p class="text-gray-600">
                Kombinasi Laravel dan Tailwind untuk development yang pantas.
            </p>
        </div>
    </div>
</div>
@endsection