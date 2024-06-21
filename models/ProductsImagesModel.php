<?php

class ProductsImagesModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {    
        $sql = $this->svc->query("select * from products_images"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($imagen, $tipo_imagen, $productos_id) {
        $stmt = $this->svc->prepare("INSERT INTO products_images (imagen, tipo_imagen, productos_id) VALUES (?, ?, ?)");

        $stmt->bind_param("bsi", $imagen, $tipo_imagen, $productos_id);

        $stmt->send_long_data(0, $imagen);

        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    public function obtenerId($id) {
        $sql = $this->svc->query("select * from products_images where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($id, $imagen, $tipo_imagen, $productos_id) {
        $stmt = $this->svc->prepare("UPDATE products_images SET imagen = ?, tipo_imagen = ?, productos_id = ? WHERE id = ?");
    
        $stmt->bind_param("bsii", $imagen, $tipo_imagen, $productos_id, $id);

        $stmt->send_long_data(0, $imagen);

        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    public function delete($id) {
        $sql = $this->svc->query("DELETE FROM products_images WHERE id=$id");
    }

    public function obtenerProducto($id) {
        $sql = $this->svc->query("SELECT  
                    products.name AS producto
                FROM 
                    products_images
                INNER JOIN 
                    products ON products_images.productos_id = products.id
                WHERE 
                    products_images.id = $id");
        $datos = $sql->fetch_assoc();
        return $datos['producto'];
    }

    public function obtenerProductos() {
        $sql = $this->svc->query("select * from products"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

}


// public function create() {
//     $rules = [
//         'imagen' => ['rules' => 'uploaded[imagen]|max_size[imagen,2048]'],
//         'tipo_imagen' => ['rules' => 'required|min_length[2]|max_length[255]'],
//         'branch_office_id' => ['rules' => 'required|min_length[1]|max_length[255]']
//     ];

//     if($this->validate($rules)) {
//         $model = new BranchImagesModel();
//         $imageFile = $this->request->getFile('imagen');
//         $data = [
//             'imagen' => file_get_contents($imageFile->getTempName()),
//             'tipo_imagen' => $this->request->getVar('tipo_imagen'),
//             'branch_office_id' => $this->request->getVar('branch_office_id')
//         ];
//         $model->save($data);

//         return $this->respond(['message' => 'Created Successfully'], 200);
//     } else {
//         $response = [
//             'errors' => $this->validator->getErrors(),
//             'message' => 'Invalid Inputs'
//         ];
//         return $this->fail($response, 409);
//     }
// }