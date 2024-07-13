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
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "about", $data);
    }

    //vista shop
    public function shop()
    {
        $data['title'] = 'Nuestros Productos';
        $data['productos'] = $this->model->getProductos();
        $this->views->getView('principal', "shop", $data);
    }

    //vista detail
    public function detail($id_producto)
    {
        $data['producto'] = $this-> model->getProducto($id_producto);
        $id_categoria = $data['producto']['id_categoria'];
        $data['relacionados'] = $this-> model->getAleatorios($id_categoria, $data['producto']['id']);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    //vista categorias
    public function categorias($id_categoria)
    {
        $data['productos'] = $this-> model->getProductosCat($id_categoria);
        $data['title'] = 'Categorias';
        $this->views->getView('principal', "categorias", $data);
    }
    //vista contact
    public function contactos($id_Contactos)
    {
        $data['contact'] = $this-> model->getProductos($id_Contactos);
        $data['title'] = 'Contactos';
        $this->views->getView('principal', "contact", $data);
    }
}