@extends('layout.app')
@section('content')
    <div>
        @php
            $data = $recipeData;
        @endphp
        <div class="flex flex-col gap-6">
            <div class="flex flex-col gap-4 md:flex-row">
                <img src="{{ $data['image'] }}" alt="{{ $data['name'] }}"
                    class="w-full object-cover h-80 md:max-w-80 rounded-xl">
                <div class="flex flex-col gap-2">
                    <div class="text-2xl font-medium md:text-4xl">{{ $data['name'] }}</div>
                    <div class="text-gray-500 md:text-2xl">{{ $data['cuisine'] }} Food</div>
                    <div class="flex flex-col gap-2 md:text-xl">
                        @if ($data['difficulty'] === 'Medium')
                            <div>Difficulty: <span class="text-orange-500 font-medium">{{ $data['difficulty'] }}</span></div>
                        @elseif ($data['difficulty'] === 'Hard')
                            <div>Difficulty: <span class="font-medium text-red-500">{{ $data['difficulty'] }}</span></div>
                        @else
                            <div>Difficulty: <span class="font-medium text-blue-500">{{ $data['difficulty'] }}</span></div>
                        @endif
                        <div><i class="fa-regular fa-clock"></i> {{ $data['cookTimeMinutes'] }} Minutes</div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="flex items-center gap-4">
                <div class="icont text-white !bg-slate-950">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <div class="text-xl">Ingredients</div>
            </div>
            <div class="flex flex-col gap-4">
                @foreach ($data['ingredients'] as $index => $ingredients)
                    <div class="flex gap-2 items-center">
                        <div class="icont !text-base">{{ $index + 1 }}</div>
                        <div>{{ $ingredients }}</div>
                    </div>
                @endforeach
            </div>
            {{--  --}}
            <div class="flex items-center gap-4">
                <div class="icont text-white !bg-slate-950">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div class="text-xl">Instructions</div>
            </div>
            <div class="flex flex-col gap-4">
                @foreach ($data['instructions'] as $index => $instructions)
                    <div class="flex gap-2 items-center">
                        <div class="icont !text-base">{{ $index + 1 }}</div>
                        <div>{{ $instructions }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
