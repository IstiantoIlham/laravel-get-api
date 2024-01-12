@extends('layout.app', ["title" => "HomePage"])
@section('content')
    @php
        $api = $recipeData['recipes'];
    @endphp
    <div class="container mx-auto">
        <div
            class="grid auto-rows-fr  xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 place-items-center gap-4">
            @foreach ($api as $recipe)
                <x-card :name="$recipe['name']" :image="$recipe['image']" :difficulty="$recipe['difficulty']" :servings="$recipe['servings']" :cuisine="$recipe['cuisine']"
                    :rating="$recipe['rating']" :url="$recipe['id']" />
            @endforeach
        </div>
    </div>
@endsection
