<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Services\ArticleService;

class ArticleController extends Controller
{

    public function __construct(private ArticleService $articleService){
    }

    //get all articles
    public function all($name)
    {
        $success = $this->articleService->all_articles($name);

        return $this->sendResponse('', $success);

    }

    //get one article
    public function one($title)
    {
        $success = $this->articleService->one_article($title);

        return $this->sendResponse('', $success);

    }

    // create article
    public function create(ArticleRequest $request)
    {
        $success = $this->articleService->create_article($request);

        return $this->sendResponse('', $success);

    }

    //update article
    public function update($title, ArticleRequest $request)
    {
        $success = $this->articleService->update_article($title,$request);

        return $this->sendResponse(__('messages.updated_successfully'), $success);
    }

    //delete article
    public function delete($title)
    {
        $success = $this->articleService->delete_article($title);
        return $this->sendResponse(__('messages.account_deleted_sucsessfully'), $success);
    }
}
