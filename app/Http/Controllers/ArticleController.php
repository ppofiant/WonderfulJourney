<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Articles;
use App\Categories;

class ArticleController extends Controller
{
    
    public function index() {
        $categories = Categories::all();
        
        return view('newblog', ['categories' => $categories]);
    }

    public function store(Request $request) {
        $categories = Categories::all();
        
        $this->validate($request, [
           'title' => 'required|unique:articles,title',
           'photo' => 'image|mimes:jpg,jpeg,png|max:2000',
           'story' => 'string|min:10'
        ]);

        //Handle Image File
        if($request->hasFile('photo')) {
            $filewithextention = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filewithextention, PATHINFO_FILENAME);
            $extention = $request->file('photo')->getClientOriginalExtension();
            $filenametostore = $request->title.'_'.time().'.'.$extention;
            $path = $request->file('photo')->storeAs('public/images/articles', $filenametostore);
            
        } else {
            $filenametostore = 'noimage.jpg';
        }

        Articles::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->categoryId,
            'title' => $request->title,
            'description' => $request->story,
            'image' => $filenametostore,
        ]);
        
        if($request->hasFile('photo')) {
            $request->photo = $path;
        } else {
            $request->photo = $filenametostore;
        }
        
        return redirect('/profile')->with('success', 'Blog Added Succesfully');
    }


    public function show($articleId) {
        $articles = Articles::get()->where('id', $articleId)->first();
        return view('articles', ['articles' => $articles]);
    }

    public function destroy($article) {
        Articles::destroy($article);
        return redirect('/blog');
    }

    public function getBlog() {
        $articles = Articles::get()->where('user_id', Auth::user()->id);
        return view('blog', ['articles' => $articles]);
    }

    public function destroys($article) {
        $articles = Articles::get()->where('id', $article)->first;
        Articles::destroy($article);
        return redirect('/home')->with('success', $articles->name. ' Blog Deleted Successfully');
    }
}