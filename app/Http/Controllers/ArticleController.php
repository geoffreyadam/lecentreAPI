<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index($token)
    {
        if(config('app.API_TOKEN') == $token){
            return Article::all();
        }else{
            return response()->json([
                'data' => 'Unauthorized access'
            ], 401);
        }
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        return response()->json("salut");
        dd("hey");
        // $newArticle = Article::create([
        //     'title' => "test",
        //     'body' => "ici"
        // ]);
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
