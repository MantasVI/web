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
        \Log::info('User logged in homepage: ' . Auth::user()->email . " with username: " . Auth::user()->username);
        $randomMovies1 = Content::getRandomMovies();
        $randomMovies2 = Content::getRandomMovies();
        $randomMovies3 = Content::getRandomMovies();
        $randomSeries1 = Content::getRandomSeries();
        $randomSeries2 = Content::getRandomSeries();
        $randomSeries3 = Content::getRandomSeries();
        $userFavorites = Favorite::where('user_id', Auth::id())->pluck('content_id')->toArray();
    return view('home', ['randomMovies1' => $randomMovies1, 'randomMovies2' => $randomMovies2, 'randomMovies3' => $randomMovies3, 'randomSeries1' => $randomSeries1, 'randomSeries2' => $randomSeries2, 'randomSeries3' => $randomSeries3, 'userFavorites' => $userFavorites]);
    }
    public function movies()
    {
        \Log::info('User logged in movies: ' . Auth::user()->email . " with username: " . Auth::user()->username);
        $movies = Content::getMovies();
        $userFavorites = Favorite::where('user_id', Auth::id())->pluck('content_id')->toArray();
        return view('movies', ['movies' => $movies, 'userFavorites' => $userFavorites]);
    }
     public function series()
    {
          \Log::info('User logged in series: ' . Auth::user()->email . " with username: " . Auth::user()->username);
          $series = Content::getSeries();
        $userFavorites = Favorite::where('user_id', Auth::id())->pluck('content_id')->toArray();
    return view('series', ['series' => $series, 'userFavorites' => $userFavorites]);
    }

    public function adminRedirect()
    {
        \Log::info('admin redirected back to homepage: ' . Auth::user()->email . " with username: " . Auth::user()->username);
        return redirect('/home');
    }




    public function adminIndex()
    {
    $contents = Content::getAllContent();
    return view('admin', ['contents' => $contents]);
    }

    public function adminCreate()
    {
    \Log::info('contentController@adminCreate - Admin accessed create content page: ' . Auth::user()->email . " with username: " . Auth::user()->username);
    return view('admin.create');
    }
    
    // Save new content
    public function adminStore(Request $request)
    {
    $request->validate([
        'title' => 'unique:contents|required|string|max:255',
        'type' => 'required|in:movie,series',
        'image_url' => 'required|string',
        'genre' => 'required|string|max:40',
    ]);

    Content::addContent([
        'title' => $request->title,
        'type' => $request->type,
        'image_url' => $request->image_url,
        'genre' => $request->genre,
    ]);

    \Log::info('ContentController@adminStore - Admin added content: ' . $request->title);
    return redirect('/admin');
    }
    //--------------------------------

  

    // Save edited content
   public function adminEdit($id)
    {
    $content = Content::getId($id);
    \Log::info('ContentController@adminEdit - admin edited content: ' . $content->title);
    return view('admin.edit', ['content' => $content]);
    }



    public function adminUpdate(Request $request, $id)
    {
    $request->validate([
        'title' => 'required|string|max:255',
        'type' => 'required|in:movie,series',
        'image_url' => 'required|string',
        'genre' => 'required|string|max:40',
    ]);

    Content::updateContent($id, [
        'title' => $request->title,
        'type' => $request->type,
        'image_url' => $request->image_url,
        'genre' => $request->genre,
    ]);

    \Log::info('ContentController@adminUpdate - Admin updated content: ' . $request->title);
    return redirect('/admin');
    }





    public function adminDestroy($id)
    {
    $content = Content::getId($id);
    \Log::info('ContentController@adminDestroy - Admin deleted content: ' . $content->title);
    Content::deleteContent($id);
    return redirect('/admin');
    }
}
