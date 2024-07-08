<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryfilter(Category $category){
        return view('article.categoryfilter', compact('category'));
    }
}
