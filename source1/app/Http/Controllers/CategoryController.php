<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function getCategories(Request $request) {

        $per_page = $request->input('per_page');
        $obj = new Category();
        $categories = $obj->paginate($per_page);
        
        return view('categories', ['categories' => $categories]);
    }
}
