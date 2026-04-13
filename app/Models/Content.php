<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'title',
        'image_url',
        'type',
        'genre',
    ];

    public static function getAllContent()
    {
        return self::all();
    }

    public static function getId($id)
    {
        return self::find($id);
    }

    public static function addContent($data)
    {
        return self::create($data);
    }

    public static function updateContent($id, $data)
    {
        return self::find($id)->update($data);
    }

    public static function deleteContent($id)
    {
        return self::find($id)->delete();
    }

    public static function getMovies()
    {
        return self::where('type', 'movie')->get();
    }

    public static function getSeries()
    {
        return self::where('type', 'series')->get();
    }
    public static function getRandomMovies()
    {
         return self::where('type', 'movie')->inRandomOrder()->limit(8)->get();
    }
    public static function getRandomSeries()
    {
         return self::where('type', 'series')->inRandomOrder()->limit(8)->get();
    }
}