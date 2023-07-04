<?php

namespace App\Services;

//use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Author;

class ArticleService {
    public function add($request){
        $author = new Author();
        $article = new Article();

        $author->name = $request->input('author');
        $author->save();

        $article->name = $request->input('article');
        $article->content = $request->input('content');
        $article->image = $request->input('image');
        $article->author_id = $author->id;
        $article->save();
        return redirect()->route('home')->with('success', 'Article added success');
    }
}
