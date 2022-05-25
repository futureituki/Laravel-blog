<?php

namespace App\Http\Controllers;

use App\Articles;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id){
        $data = Articles::find($id);
        return view('article',compact('data'));
    }
}
