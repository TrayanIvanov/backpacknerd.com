<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $articlesModel = new Article();
        $favouriteArticles = $articlesModel->getFavouriteArticles();

        return view('pages.index', [
            'favouriteArticles' => $favouriteArticles,
        ]);
    }
}
