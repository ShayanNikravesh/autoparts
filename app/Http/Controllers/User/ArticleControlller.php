<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleControlller extends Controller
{
    public function index()
    {
        $articles = Article::where('status', '=', 'active')->get();
        return view('user.article.index',compact('articles'));
    }

    public function show(string $id)
    {
        $article = Article::where('id', '=', $id)->where('status', '=', 'active')->firstOrFail();
        $articles = Article::where('status','=','active')->get();
        return view('user.article.show',compact('article','articles'));
    }
}
