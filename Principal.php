//obtener producto a partir de la lista de deseo
public function listaDeseo() {
    $datos = file_get_contents('php://input');
    $json = json_decode($datos, true);
    $array['productos'] = array();
    foreach ($json as $producto) {
        $result = $this->model->getListaDeseo($producto['idProducto']);
        $data['id'] = $result['id'];
        $data['nombre'] = $result['nombre'];
        $data['precio'] = $result['precio'];
        $data['cantidad'] = $producto['cantidad'];
        $data['imagen'] = $result['imagen'];
        array_push($array['productos'], $data);
    }
    $array['moneda'] = MONEDA;
    echo json_encode($array, JSON_UNESCAPED_UNICODE);
    die();
}
