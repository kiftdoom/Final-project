//obtener producto a partir de la lista de deseo
public function getListaDeseo($id_producto) {
    $sql = "SELECT * FROM productos WHERE id = $id_producto";
    return $this->select($sql);
}
