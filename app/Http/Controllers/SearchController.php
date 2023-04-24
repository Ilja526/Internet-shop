<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $search = $request->get('search');

        $data = Post::where('name', 'like', '%' . $search . '%')->get();

        return view('layouts.app', ['data' => $data, 'output' => $data->count()]);
    }
}
