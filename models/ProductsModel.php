<?php

class ProductsModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {    
    // SELECT  
    //     mark.name AS marca_producto
    // FROM 
    //     products
    // INNER JOIN 
    //     mark ON products.mark_id = mark.id
    // WHERE 
    //     products.id = 2;    

        $sql = $this->svc->query("select * from products"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($data) {
        $sql = $this->svc->query("INSERT INTO products (name, description, price, quantity, date, category, mark_id, branch_office_id) VALUES ($data)"); 
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
        $sql = $this->svc->query("UPDATE products SET name='{$datos['name']}', description='{$datos['description']}', price='{$datos['price']}', quantity='{$datos['quantity']}', date='{$datos['date']}', category='{$datos['category']}', mark_id='{$datos['mark_id']}', branch_office_id='{$datos['branch_office_id']}' WHERE id={$datos['id']}");
    }

    public function delete($id) {
        $sql = $this->svc->query("DELETE FROM products WHERE id=$id");
    }

    public function obtenerMarca($id) {
        $sql = $this->svc->query("SELECT  
                    mark.name AS marca_producto
                FROM 
                    products
                INNER JOIN 
                    mark ON products.mark_id = mark.id
                WHERE 
                    products.id = $id");
        $datos = $sql->fetch_assoc();
        return $datos['marca_producto'];
    }

    public function obtenerSucursal($id) {
        $sql = $this->svc->query("SELECT  
                    branch_office.name AS sucursal_producto
                FROM 
                    products
                INNER JOIN 
                    branch_office ON products.branch_office_id = branch_office.id
                WHERE 
                    products.id = $id");
        $datos = $sql->fetch_assoc();
        return $datos['sucursal_producto'];
    }

    public function obtenerMarcas() {
        $sql = $this->svc->query("select * from mark"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function obtenerSucursales() {
        $sql = $this->svc->query("select * from branch_office"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

}