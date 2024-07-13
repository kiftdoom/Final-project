<?php
class PrincipalModel extends Query{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getProduct($id_product)
    {
    $sql = "SELECT p.*, c.categories
        FROM products p
        INNER JOIN categories c ON p.id_categoria = c.id
        WHERE p.id = $id_product";
        return $this->select($sql);
    }
    //paginacion
    //public function getProducts($desde, $porPagina)
    //{
    //    $sql = "SELECT * FROM  products LIMIT $desde, $porPagina";
    //    return $this->selectAll($sql);
    //}
    //obtener total ptoductos
    public function getProducts($desde, $porPagina)
{
    $sql = "SELECT * FROM  products LIMIT $desde, $porPagina";
    return $this->selectAll($sql);
}

    public function getTotalProducts()
    {
        $sql = "SELECT COUNT(*) AS total FROM products";
        return $this->select($sql);
    }



}


?>
