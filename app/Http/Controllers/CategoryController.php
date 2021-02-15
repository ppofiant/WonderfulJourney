<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Articles;
use App\Categories;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() {
        $categories = Categories::all();
        $articles = Articles::all();
        foreach ($articles as $article) { 
            $article->description = Str::limit($article->description, 81);
        }
        return view('welcomes', ['categories' => $categories, 'articles' => $articles]);
    }

    public function show($id) {
        $categories = Categories::all();
        $articles = Articles::where('category_id', $id)->get();
        // if(count($articles) == 0);
        foreach ($articles as $art) { 
            $art->description = Str::limit($art->description, 81);
        }
        return view('blogcategories', ['articles' => $articles, 'categories' => $categories]);
        // return $articles;
    }
}