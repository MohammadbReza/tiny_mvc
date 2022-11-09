<?php

namespace Application\Controllers;

use Application\Model\Article as ArticleModel;
use Application\Model\Category;

class Article extends Controller
{
    public function index()
    {
        $article = new ArticleModel();
        $articles = $article->all();
        $this->view('panel.article.index',compact('articles'));
    }
    public function create()
    {
        $category = new Category();
        $categories = $category->all();
        $this->view('panel.article.create',compact('categories'));
    }
    public function store()
    {
        $article = new ArticleModel();
        $article->store($_POST);
        $this->redirect('article');
    }
    public function edit($id)
    {
        $ob_article = new ArticleModel();
        $article = $ob_article->find($id);
        $category = new Category();
        $categories = $category->all();
        $this->view('panel.article.edit',compact('article','categories'));
    }
    public function update($id)
    {
        $article = new ArticleModel();
        $article->update($id, $_POST);
        $this->redirect('article');
    }
    public function delete($id)
    {
        $article = new ArticleModel();
        $article->delete($id);
        $this->back();
    }
}
