<?php

namespace App\Services;

use App\Models\Article;
use App\Models\User;

class ArticleService
{
    //get all article
    public function all_articles($name)
    {
        $user = User::where('name', $name)->with('article')->get();
        return $user;
    }

    //get one article
    public function one_article($title)
    {
        $article = Article::where('title', $title)->with('user')->get();
        return $article;
    }

    // create article
    public function create_article($request)
    {
        $article = Article::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'article' => $request->article
        ]);
        return true;
    }

    //update article
    public function update_article($title,$request)
    {
        $article = Article::where('title', $title)->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'article' => $request->article
        ]);
        return true;
    }

    //delete article
    public function delete_article($title){
        $delete = User::where('title',$title)->delete();
        return true;
    }
}
