<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function item($id)
    {
        $categoriesList = [
            1 => [
              'id' => 1,
              'name' => 'Chemin vers O\'clock',
              'status' => 1
            ],
            2 => [
              'id' => 2,
              'name' => 'Courses',
              'status' => 1
            ],
            3 => [
              'id' => 3,
              'name' => 'O\'clock',
              'status' => 1
            ],
            4 => [
              'id' => 4,
              'name' => 'Titre Professionnel',
              'status' => 1
            ]
        ];

        //si la catégorie n'existe pas...
        if(!array_key_exists($id, $categoriesList)){
            abort(404, "This category does not exist dude.");
        }

        $category = $categoriesList[$id];
        return response()->json($category);
    }

    public function list()
    {
        $categoriesList = Category::all();

        dd($categoriesList);

        return response()->json($categoriesList);
    }
}
