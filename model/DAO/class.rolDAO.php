<?php

class rolDAO extends dataSource implements IRol {
  
  public function delete($id) {
    $sql = 'DELETE FROM mer_rol WHERE rol_id = :id';
    $params = array(
        ':id' => $id
    );
    return $this->execute($sql, $params);
  }
  
   public function insert(\rol $rol) {
    $sql = 'INSERT INTO mer_rol (rol_id, rol) VALUES (:id, :rol)';
    $params = array(
        ':id' => $rol->getId(),
        ':rol' => $rol->getNombre()
    );
    return $this->execute($sql, $params);
  }
  
   public function search($id) {
    $sql = 'SELECT rol_id, rol FROM mer_rol WHERE rol_id = :id';
    $params = array(
        ':id' => $id
    );
    return $this->query($sql, $params);
  }
  
  public function select() {
    $sql = 'SELECT rol_id, rol FROM mer_rol';
    return $this->query($sql);
  }
  
   public function selectById($id) {
    $sql = 'SELECT rol_id, rol FROM mer_rol WHERE id = :id';
    $params = array(
        ':id' => $id
    );
    return $this->query($sql, $params);
  }
  
  public function update(\rol $rol) {
    $sql = 'UPDATE mer_rol SET rol = :rol WHERE rol_id = :id';
    $params = array(
        ':rol' => $rol->getNombre(),
        ':id' => $rol->getId()
    );
    $this->execute($sql, $params);
  }
}