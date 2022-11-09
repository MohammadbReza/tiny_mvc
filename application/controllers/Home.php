<?php
namespace Application\Controllers;
use Application\Model\Category;
use Application\Model\Article;

class Home extends Controller{
    public function index() {
        $categories = new Category();
        $categories = $categories->all();
        $articles = new article();
        $articles = $articles->all();
        return $this->view('app.index',compact('categories','articles'));
    }
    public function category($id) {
        $obj_category = new Category();
        $categories = $obj_category->all();
        $obj_category = new Category();
        $category = $obj_category->find($id);
        $obj_category = new Category();
        $articles = $obj_category->articles($id);
        $this->view('app.category',compact('categories','category','articles'));
    }
    public function show($id)
    {
        $category = new Category();
        $categories = $category->all();
        $article = new Article();
        $article = $article->find($id);
        $this->view('app.show',compact('categories','article'));
    }
}