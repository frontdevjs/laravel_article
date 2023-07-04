<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

//use App\Http\Controllers\Controller;


//use Illuminate\Http\Request;

class ArticleController extends BaseController{
    public function home()
    {
        $article = Article::all();
//        dd($article);
        return view('pages.home', ['data' => $article]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function add(ArticleRequest $request)
    {
        return $this->service->add($request);
    }
}
