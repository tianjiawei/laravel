<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id = 0)
    {
        //throw new \Exception("我故意的", 1);
        //$data = Article::find($id);
        
        $data = DB::table("articles")->where('id', $id)->first();
        return view('article.show')->withArticle($data);
    }
}
