<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index() {
        return Animal::where([
            'kingdom' => 'ANIMALIA',
            'category' => 'CR',
            'category' => 'EN',
            'category' => 'VU',
        ])->get();
    }

    public function show($id) {
        $animal = Animal::findOrFail($id);
        return $animal;
    }

    public function images() {
        $animals = Animal::where([
            'kingdom' => 'ANIMALIA',
            'category' => 'CR',
            'category' => 'EN',
            'category' => 'VU',
        ])->get();

        return view('animals.images', compact('animals'));
    }
}
