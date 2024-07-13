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
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina = 10;
        $desde = ($pagina - 1) * $porPagina;
        $data['title'] = 'Our products';
        $data['products'] = $this->model->getProducts($desde, $porPagina);
        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProducts();
        $data['total'] = ceil($total['total'] / $porPagina);
        $this->views->getView('principal', "shop", $data);
    }

    //vista detail
    //public function detail($id_product)
    //{
    //    $data['product'] = $this-> model->getProducts($id_product);
     //   $data['title'] = $data['products']['name'];
     //   $this->views->getView('principal', "detail", $data);
    //}
    public function detail($id_product)
{
    $data['product'] = $this->model->getProduct($id_product);
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