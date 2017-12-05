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
        ]);


        if (! empty($request->class)) {
            $classes = explode(',', $request->class);
            $animals->whereIn('class', $classes);
        }

        if (! empty($request->category)) {
            $categories = explode(',', $request->category);
            $animals->whereIn('category', $categories);
        }

        if (! empty($request->name)) {
            $animals->where('common_name', 'like', $request->name.'%');
            $animals->orWhere('scientific_name', 'like', $request->name.'%');
        }

        $animals->whereIn('class', ['AMPHIBIA', 'AVES', 'MAMMALIA', 'REPTILIA'])
        ->whereRaw('(in_decreto_supremo = 1 or grupo IS NOT NULL)')
        ->where('in_decreto_supremo', '1')
        ->orWhereNotNull('grupo')
        ->orderByRaw('case when image_url is null then 1 else 0 end')
        ->orderBy('category')
        ->orderBy('scientific_name');

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
