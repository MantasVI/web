<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller
{
    
    public function add(Request $request)
    {
        $userId = Auth::id();
        $contentId = $request->contentId;

        $existing = Favorite::where('user_id', $userId)
                            ->where('content_id', $contentId)
                            ->first();

        if($existing) {
            $existing->delete();
            return response()->json(['status' => 'removed']);
        } else {
            Favorite::create([
                'user_id' => $userId,
                'content_id' => $contentId,
            ]);
            return response()->json(['status' => 'added']);
        }
    }
    
    public function remove()
    {

    }
    public function index()
    {
    $favorites = Favorite::where('user_id', Auth::id())
                        ->with('content')
                        ->get();

    return view('favorites', ['favorites' => $favorites]);
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
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $favorite)
    {
        //
    }
}
