<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function item($id)
    {
        $categoryList = Category::find($id);

        dd($categoryList);

        //si la catégorie n'existe pas...
        if(!array_key_exists($id, $categoryList)){
            abort(404, "This category does not exist dude.");
        }

        $category = $categoryList[$id];
        return response()->json($category);
    }

    public function list()
    {
        $categoriesList = Category::all();

        dd($categoriesList);

        return response()->json($categoriesList);
    }
}
