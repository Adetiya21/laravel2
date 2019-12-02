<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Laravel 2 CRUD Perpage';
        // $articles = Article::all();
        $articles = Article::paginate(5);
        return view('home',compact('title'), ['articles' => $articles]);
    }

    public function create()
    {
        $title = 'Input Laravel 2 CRUD Perpage';
        return view('create', compact('title'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info', 'Book Saved Successfully');
    }

    public function edit($id)
    {
        $title = 'Edit Laravel 2 CRUD Perpage';
        $articles = Article::find($id);
        return view('edit', compact('title'))->with('articles',$articles);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        
        $data = array(
            'title' =>  $request->input('title'),
            'description' =>  $request->input('description')
        );
        Article::where('id',$id)->update($data);
        return redirect('/')->with('info', 'Book Updated Successfully');
    }

    public function detail($id)
    {
        $title = 'Detail Laravel 2 CRUD Perpage';
        $articles = Article::find($id);
        return view('detail', compact('title'))->with('articles',$articles);
    }

    public function delete($id)
    {
        Article::where('id',$id)->delete();
        return redirect('/')->with('info', 'Book Deleted Successfully');
    }
}
