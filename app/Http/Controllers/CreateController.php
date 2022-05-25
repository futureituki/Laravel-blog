<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = \Auth::user();
        return view('create',compact('user'));
    }
    public function create(Request $request){
        $data = $request->all();
        $memo_id = Articles::insertGetId(['content'=>$data['content'],'user_id'=>$data['user_id'],'title'=>$data['title'],'status'=>1]);
        return redirect('/home');
    }
}
