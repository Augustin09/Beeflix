<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        
        $movie = \App\Movie::all();
        return view('welcome',['movie' => $movie]);
    }

    public function detail($id){
        $movie = \App\Movie::find($id);
        $episode = \App\Episode::where('movies_id',$id)->paginate(3);
        return view('moviesdetail',['movie' => $movie],['episode' => $episode]);

    }

    public function category($id){

        $genre = \App\Genre::where('id',$id)->first();
        $movie = \App\Movie::all();
        return view('category',['genre' => $genre],['movie'=>$movie]);
    }

}
