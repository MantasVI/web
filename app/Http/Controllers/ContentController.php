<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use App\Models\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function home()
    {
        $userFavorites = Favorite::where('user_id', Auth::id())->pluck('content_id')->toArray();
    return view('home', ['userFavorites' => $userFavorites]);
    }
    public function movies()
    {
      $userFavorites = Favorite::where('user_id', Auth::id())->pluck('content_id')->toArray();
    return view('movies', ['userFavorites' => $userFavorites]);
    }
     public function series()
    {
        $userFavorites = Favorite::where('user_id', Auth::id())->pluck('content_id')->toArray();
    return view('series', ['userFavorites' => $userFavorites]);
    }
  
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }
}
