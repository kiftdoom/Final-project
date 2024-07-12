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
    public function getProducts($from , $forpage)
    {
        $sql = "SELECT * FROM products LIMIT $from , $forpage";
        return $this->selectAll($sql);
    }


}


?>
