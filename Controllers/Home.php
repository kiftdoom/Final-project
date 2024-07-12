<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Principal Page';
        $data['categories'] = $this->model->getCategories();
        $data['newProducts'] = $this->model->getNewProduct();
        
        $this->views->getView('home', "index", $data);
    }
    
}