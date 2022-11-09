<?php
namespace Application\Controllers;
use Application\Model\Category as CategoryModel;
class Category extends Controller{
    public function index()
    {
        $category = new CategoryModel();
        $categories = $category->all();
        $this->view('panel.category.index', compact('categories'));
    }
    public function create()
    {
        $category = new CategoryModel();
        $categories = $category->all();
        $this->view('panel.category.create', compact('categories'));
    }
    public function store()
    {
        $category = new CategoryModel();
        $category->insert($_POST);
        $this->redirect('category');
    }
    public function show($id)
    {  
    }
    public function edit($id)
    {
        $ob_category = new CategoryModel();
        $category = $ob_category->find($id);
        $this->view('panel.category.edit', compact('category'));
    }
    public function update($id)
    {
        $category = new CategoryModel();
        $category->update($id,$_POST);
        $this->redirect('category');
    }
    public function delete($id)
    {
        $category = new CategoryModel();
        $category->delete($id);
        $this->back();  
    }
}