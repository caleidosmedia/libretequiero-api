<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function search(Request $request) {
        $animals = DB::table('animals');

        if(!empty($request->taxonomia)) {
            $animals->where('class', $request->taxonomia);
        }

        if(!empty($request->grupo)) {
            $animals->where('grupo', $request->grupo);
        }

        if(!empty($request->color)) {
            $animals->where('color', $request->color);
        }

        return $animals->get();
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
