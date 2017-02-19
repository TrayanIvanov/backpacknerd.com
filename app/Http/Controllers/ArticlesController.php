<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Storage;

class ArticlesController extends Controller
{
    public function allArticles()
    {
        $articlesModel = new Article();
        $allArticles = $articlesModel->getAllArticles();

        return view('pages.articles', [
            'allArticles' => $allArticles,
        ]);
    }

    public function selectedArticle(Article $article)
    {
        $otherArticles = $article->getOtherArticles($article->id);

        return view('pages.article', [
            'article' => $article,
            'otherArticles' => $otherArticles,
        ]);
    }
}
