<?php
class HomeModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategories()
    {
        $sql = "SELECT * FROM categories";
        return $this->selectAll($sql);
    }
    public function getNewProduct()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 12";
        return $this->selectAll($sql);
    }

}
 
?>