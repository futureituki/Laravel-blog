<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!Auth::check()){
            return view('login');
        }
        $user = \Auth::user();
        $data = Articles::where('user_id',$user->id)->where('status',1)->orderBy('updated_at','DESC')->get();
        return view('home',compact('data'));
    }
    public function edit($id){
        $user = \Auth::user();
        $article = Articles::where('status',1)->where('user_id',$user->id)->where('id',$id)->first();
        return view('edit',compact('article','user'));
    }
    public function update(Request $request ,$id){
        $article = Articles::where('id',$id)->update(['title'=>$request->title,'content'=>$request->content]);
        return redirect()->route('home');
    }
}
