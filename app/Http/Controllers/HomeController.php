<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use EndaEditor;

class HomeController extends Controller
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
    public function index()
    {
        return view('home')->withArticles(\App\Article::all());
    }

    public function show($id = 0) {
        $article = DB::table('articles')->where('id', $id)->first();
        //r_dump($article);exit;
        $str = EndaEditor::MarkDecode("#我是markdown语法");
        return view('article')->with('article', $article);
    }
}
