<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalsController extends Controller
{
    public function index(Request $request)
    {
        $animals = Animal::where([
            'kingdom' => 'ANIMALIA',
        ])->whereIn('class', ['AMPHIBIA', 'AVES', 'MAMMALIA', 'REPTILIA'])
        ->orderBy('category')
        ->orderBy('image_url', 'desc');

        if (! empty($request->paginate) && $request->paginate == 'false') {
            return $animals->get();
        } else {
            return $animals->paginate(5);
        }
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return $animal;
    }

    public function search(Request $request)
    {
        $animals = DB::table('animals');

        if (! empty($request->taxonomia)) {
            $animals->where('class', $request->taxonomia);
        }

        if (! empty($request->grupo)) {
            $animals->where('grupo', $request->grupo);
        }

        if (! empty($request->color)) {
            $animals->where('color', $request->color);
        }

        if (! empty($request->color_secundario)) {
            $animals->where('color_secundario', $request->color_secundario);
        }

        return $animals->get();
    }

    public function images()
    {
        $animals = Animal::where([
            'kingdom' => 'ANIMALIA',
            'category' => 'CR',
            'category' => 'EN',
            'category' => 'VU',
        ])->get();

        return view('animals.images', compact('animals'));
    }
}
