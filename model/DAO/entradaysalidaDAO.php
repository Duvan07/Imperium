<?php

class entradaysalidaDAO extends dataSource implements IEntradaysalida {

  public function insert(\entradaysalida $mer_EntradaySalida) {
    $sql = 'INSERT INTO mer_EntradaySalida (ent_id,ent_horaentrada,ent_horasalalmuerzo,horaentalmuerzo,horasalida) VALUES (:id, :horae,:horasa,:horaea,:horas )';
    $params = array(
        ':id' => $entradaysalida->getId(),
        ':horae' => $entradaysalida->getHoraentrada(),
        ':horasa' => $entradaysalida->getHorasalalmuerzo(),
        ':horaea' => $entradaysalida->getHoraentalmuerzo(),
        ':horas' => $entradaysalida->getHorasalida(),
    );
    return $this->execute($sql, $params);
  }

  public function select() {
    $sql = 'SELECT ent_id, ent_horaentrada,ent_horaentrada,ent_horasalalmuerzo,ent_horaentalmuerzo,ent_horasalida FROM mer_EntradaySalida';
    return $this->query($sql);
  }

  public function update(\entradaysalida $mer_EntradaySalida) {
    $sql = 'UPDATE mer_EntradaySalida SET ent_id=:id, ent_horaentrada:horae,ent_horasalalmuerzo:horasa,horaentalmuerzo:horaea,horasalida:horas)';
    $params = array(
        ':id' => $entradaysalida->getId(),
        ':horae' => $entradaysalida->getHoraentrada(),
        ':horasa' => $entradaysalida->getHorasalalmuerzo(),
        ':horaea' => $entradaysalida->getHoraentalmuerzo(),
        ':horas' => $entradaysalida->getHorasalida(),
    );
    return $this->execute($sql, $params);
  }

}
