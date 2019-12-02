<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Validator;
use Response;
use Illuminate\Support\Facedes\Input;
use App\http\Requests;

class AjaxController extends Controller
{
    public function index()
    {
        // $articles = Article::all();
        $articles = Article::paginate(5);
        return view('ajax.home', compact('articles'));
    }

    public function addPost(Request $req)
    {
        // $data = array(
        //     'title' => 'required',
        //     'description' => 'required'
        // );
        // $validator = Validator::make(input::all(), $data);
        // if($validator->fails())
        // return response()->json(array('errors'=> $validator->getMessageBag()->toarray()));

        // else{
            $articles = new Article;
            $articles->title = $req->title;
            $articles->description = $req->description;
            $articles->save();
            return response()->json($articles);
        // }
    }

    public function editPost(Request $request)
    {
        $art = Article::find($request->id);
        $art->title = $request->title;
        $art->description = $request->description;
        $art->save();
        return response()->json($art);
    }

    public function deletePost(Request $request)
    {
        $articles = Article::find ($request->id)->delete();
        // return response()->json();
        return $request->id;
    }
}
