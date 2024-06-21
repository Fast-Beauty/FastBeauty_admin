<?php

class BranchModel
{
    private $svc;

    public function __CONSTRUCT()
    {
        $this->svc = (new db())->conexion();
    }

    public function listar()
    {
        $sql = $this->svc->query("select * from branch_office");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($data)
    {
        $sql = $this->svc->query("INSERT INTO branch_office (name, nit, addres, google_location, phone) VALUES ($data)");
        if ($sql) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerId($id)
    {
        $sql = $this->svc->query("select * from branch_office where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($datos)
    {
        $sql = $this->svc->query("UPDATE branch_office SET name='{$datos['name']}', nit='{$datos['nit']}', addres='{$datos['addres']}', google_location='{$datos['google_location']}', phone='{$datos['phone']}' WHERE id={$datos['id']}");
    }
    public function delete($id)
    {
        $sql = $this->svc->query("DELETE FROM branch_office WHERE id=$id");
    }
}
