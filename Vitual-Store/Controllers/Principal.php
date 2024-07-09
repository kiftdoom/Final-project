<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {

    }
    //view about
    public function about()
    {
        $data['title'] = 'Our Team';
        $this->views->getView('principal', "about", $data);
    }
    public function shop()
    {
        $data['title'] = 'Our products';
        $this->views->getView('principal', "shop", $data);
    }

    //vista detail
    public function detail($id_product)
    {
        $data['title'] = '--------------';
        $this->views->getView('principal', "detail", $data);
    }
    //vista contact
    public function contacts($id_product)
    {
        $data['title'] = 'Contacts';
        $this->views->getView('principal', "contact", $data);
    }
}