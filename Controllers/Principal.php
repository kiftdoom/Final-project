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

    //vista shop
    public function shop($page)
    {
        $pagin = (empty($page)) ? 1 : $page ;
        $forpage = 10;
        $from = ($pagin - 1) * $forpage;
        $data['title'] = 'Our products';
        $data['products'] = $this->model->getproducts($from, $forpage);
        $this->views->getView('principal', "shop", $data);
    }

    //vista detail
    public function detail($id_product)
    {
        $data['product'] = $this-> model->getProduct($id_product);
        $data['title'] = $data['product']['name'];
        $this->views->getView('principal', "detail", $data);
    }
    //vista contact
    public function contacts($id_Contacts)
    {
        $data['contact'] = $this-> model->getProduct($id_Contacts);
        $data['title'] = 'Contacts';
        $this->views->getView('principal', "contact", $data);
    }
}