<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function createArticle() {
        return view("articlePost");
    }

    function submitArticle(Request $request) {
        /* Article::create(["title" => "New Magazines", 'body' => "Super nigga is back."]); */
        return view("articlePost");
    }
    function getArticles() {
        $articles = Article::latest()->paginate(5); 


        return view('articles', compact('articles'));
    }

    function searchArticle(Request $request) {
        $id = (int)$request->id;
        $article = Article::findOrFail($id);
        return view('article', compact('article'));
    }



}
