<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Response;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = '';
        if($request->has('search')){
            $articles = Article::search($request->input('search'))->toArray();
        }
        return view('article-search',compact('articles'));
        //return view('article-search')->with([ 'articles' => $articles ]);
    }
    /**
     * create student.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required',
        ]);
        $article= Article::create($request->all());
        $article->addToIndex();
        return redirect()->back();
    }
}
