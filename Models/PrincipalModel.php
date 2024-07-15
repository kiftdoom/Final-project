<?php
class PrincipalModel extends Query{

    public function __construct()
    {
        parent::__construct();
    }
    

    public function getProducto($id_producto)
    {
    $sql = "SELECT p.*, c.categoria 
            FROM productos p
            INNER JOIN categorias c ON p.id_categoria = c.id
            WHERE p.id = $id_producto";
    return $this->select($sql);
    }
    public function getProductos()
    {
        $sql = "SELECT * FROM productos";
        return $this->selectAll($sql);
    }
    //productos relacionados aleatoriamente
    public function getProductosCat($id_categoria)
    {
        $sql = "SELECT *
        FROM productos 
        WHERE id_categoria = $id_categoria";
    return $this->selectALL($sql);
    }
    //productos relacionados aleatoriamente
    public function getAleatorios($id_categoria, $id_producto)
    {
        $sql = "SELECT * FROM productos WHERE id_categoria = $id_categoria AND id != $id_producto ORDER BY RAND() LIMIT 10";
        return $this->selectALL($sql);
    }

}


?>
