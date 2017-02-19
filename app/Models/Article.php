<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function getAllArticles()
    {
        $allArticles = $this
            ->where('active', 1)
            ->orderBy('id', 'desc')
            ->get();

        return $allArticles;
    }

    public function getFavouriteArticles()
    {
        $favouriteArticles = $this
            ->where('active', 1)
            ->where('favourite', 1)
            ->orderBy('id', 'desc')
            ->get();

        return $favouriteArticles;
    }

    public function getOtherArticles($id, $limit = 3)
    {
        $otherArticles = $this
            ->where('active', 1)
            ->where('id', '!=', $id)
            ->limit($limit)
            ->inRandomOrder()
            ->get();

        return $otherArticles;
    }
}
