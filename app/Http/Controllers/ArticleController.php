<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use Response;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = '';
        if($request->has('search')){
            //$articles = Article::search($request->input('search'))->toArray();
            $articles = Article::search($request->get('search'))->get();


           // $articles = Article::find($request->input('search'));


//            $articles = Article::query()
//                ->where('title', 'LIKE', "%{$request->input('search')}%")
//                ->orWhere('body', 'LIKE', "%{$request->input('search')}%")
//                ->orWhere('tags', 'LIKE', "%{$request->input('search')}%")
//                ->get();

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
        return redirect()->back()->with('flash_message_success', 'Record created successfully');
    }
   function listing(){
       $articles =  DB::table('articles')->get();

      return view ('index', compact('articles', $articles));
   }

}
