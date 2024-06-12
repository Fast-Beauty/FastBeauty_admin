<?php

class ProductsModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {
        $sql = $this->svc->query("select * from products"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($data) {
        $sql = $this->svc->query("INSERT INTO products (name, description, price, quantity, mark_id, date, category, branch_office_id) VALUES ($data)"); 
        if($sql) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerId($id) {
        $sql = $this->svc->query("select * from products where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($datos) {
        $sql = $this->svc->query("UPDATE products SET name='{$datos['name']}', description='{$datos['description']}', price='{$datos['price']}', quantity='{$datos['quantity']}', mark_id='{$datos['mark_id']}', date='{$datos['date']}', category='{$datos['category']}', branch_office_id='{$datos['branch_office_id']}'} WHERE id={$datos['id']}");
    }

    public function delete($id) {
        $sql = $this->svc->query("DELETE FROM products WHERE id=$id");
    }

}