<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function getRecipe()
    {
        $apiUrl = "https://dummyjson.com/recipes";
        $client = new Client();

        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            return view('recipe', ['recipeData' => $data]);
        } catch (\Exception $e) {
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }

    public function getDetailRecipe($id)
    {
        $apiUrl = "https://dummyjson.com/recipes/" . $id;
        $client = new Client();

        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            return view('detail', ['recipeData' => $data]);
        } catch (\Exception $e) {
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }
}
