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
                \Log::info('User removed favorite: ' . Auth::user()->email . " with username: " . Auth::user()->username . " content ID: " . $contentId);
            return response()->json(['status' => 'removed']);
        } else {
             \Log::info('User added favorite: ' . Auth::user()->email . " with username: " . Auth::user()->username . " content ID: " . $contentId);
            Favorite::create([
                'user_id' => $userId,
                'content_id' => $contentId,
            ]);
            return response()->json(['status' => 'added']);
        }
    }
 
    public function favorites()
    {
          \Log::info('User logged in Favorite page: ' . Auth::user()->email . " with username: " . Auth::user()->username);
    $favorites = Favorite::where('user_id', Auth::id())
                        ->with('content')
                        ->get();

    return view('favorites', ['favorites' => $favorites]);
    }
  
}
