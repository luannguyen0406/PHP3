<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index()
    {
        $menu = DB::table('category')->get();
        $p = DB::table('posts')->limit(5)->get();
        $new = DB::table('posts')->limit(3)->get();
        $posts = DB::table('posts')->where('view','>',4)
            ->limit(2)
            ->get();
        $trending = DB::table('posts')->orderByDesc('view')->limit(4)->get();
        return view('client.index', compact('menu', 'p', 'new', 'posts', 'trending'));
    }
    function show($id)
    {
        $trending = DB::table('posts')->orderByDesc('view')->limit(4)->get();
        $p = DB::table('posts')->find($id);
        $new = DB::table('posts')->limit(3)->get();
        $menu = DB::table('category')->get();
        $posts = DB::table('posts')->where('id', '<', 7)
            ->limit(2)
            ->get();
        return view('client.detail', compact('p', 'new', 'menu', 'posts', 'trending'));
    }
    public function new($id)
    {   
        $trending = DB::table('posts')->orderByDesc('view')->limit(4)->get();


        $new = DB::table('posts')->limit(3)->get();
        $p = DB::table('posts')->find($id);
        $menu = DB::table('category')->get();
        $category = DB::table('category')->find($id);
        $posts = DB::table('posts')
            ->join('category', 'posts.idCategory', '=', 'category.id')
            ->where('category.id', $id)
            ->select('posts.*', 'category.name as category_name')
            ->orderBy('posts.view', 'desc')
            ->get();

        return view('client.allnew', compact('category', 'posts','menu','p','new','trending'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $news = DB::table('posts')->where('title', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%")
                    ->get();

        return view('client.layout.items.search', ['news' => $news]);
    }
}
