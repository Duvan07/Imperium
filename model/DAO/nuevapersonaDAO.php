<?php

class nuevapersonaDAO extends dataSource implements INuevapersona {

  public function delete($id) {
    $sql = 'DELETE FROM mer_persona WHERE id = :id';
    $params = array(
        ':id' => $id
    );
    return $this->execute($sql, $params);
  }

  public function insert(\nuevapersona $mer_persona) {
    $sql = 'INSERT INTO mer_persona (per_id, per_cedula, per_nombres, per_apellidos, '
            . 'per_genero, per_fenacimiento, per_edad, per_lugarnacimiento,per_nacionalidad,per_lugarresidencia,per_direccionresidencia,'
            . 'per_notelefono,per_correo,per_fecingresoempresa,per_antiguedad,per_cargo,per_centrotrabajo,per_area,per_turno,per_salario,'
            . 'per_tipovinculacion,per_arl,per_eps,per_afp,per_escolaridad,per_profesion,per_estadocivi,per_raza,per_nohijos,per_otraperacargo,'
            . 'per_estratosocial,per_concentimientoformado) VALUES (:id, :ced, :nom, :ape, :gen, :fen, :edad, :lun, :nac, :lur, :dir, :tel,'
            . ' :correo,:feingre,:anti,:cargo, :centro ,:area, :tur, :sal , :tiv, :arl, :eps, :afp, :esc, :profe, :estadoc, :raza, :nohijos, :otp, :estrato, :consent)';
    $params = array(
        ':id' => $mer_persona->getId(),
        ':ced' => $mer_persona->getCedula(),
        ':nom' => $mer_persona->getNombres(),
        ':ape' => $mer_persona->getApellidos(),
        ':gen' => $mer_persona->getGenero(),
        ':fen' => $mer_persona->getFenacimiento(),
        ':edad' => $mer_persona->getEdad(),
        ':lun' => $mer_persona->getLugarnacimiento(),
        ':nac' => $mer_persona->getNacionalidad(),
        ':lur' => $mer_persona->getLugarresidencia(),
        ':dir' => $mer_persona->getDireccionresidencia(),
        ':tel' => $mer_persona->getNotelefono(),
        ':correo' => $mer_persona->getCorreo(),
        ':feingre' => $mer_persona->getFecingresoempresa(),
        ':anti' => $mer_persona->getAntiguedad(),
        ':cargo' => $mer_persona->getCargo(),
        ':centro' => $mer_persona->getCentrotrabajo(),
        ':area' => $mer_persona->getArea(),
        ':tur' => $mer_persona->getTurno(),
        ':sal' => $mer_persona->getSalario(),
        ':tiv' => $mer_persona->getTipovinculacion(),
        ':arl' => $mer_persona->getArl(),
        ':eps' => $mer_persona->getEps(),
        ':afp' => $mer_persona->getAfp(),
        ':esc' => $mer_persona->getEscolaridad(),
        ':profe' => $mer_persona->getProfesion(),
        ':estadoc' => $mer_persona->getEstadocivi(),
        ':raza' => $mer_persona->getRaza(),
        ':nohijos' => $mer_persona->getNohijos(),
        ':otp' => $mer_persona->getOtrasperacargo(),
        ':estrato' => $mer_persona->getEstratosocial(),
        ':consent' => $mer_persona->getConcentimientoformado()
    );
    return $this->execute($sql, $params);
  }

  public function select() {
    $sql = 'SELECT per_id, per_cedula, per_nombres, per_apellidos, '
            . 'per_genero, per_fenacimiento, per_edad, per_lugarnacimiento,per_nacionalidad,per_lugarresidencia,per_notelefono,'
            . 'per_direccionresidencia,per_correo,per_fecingresoempresa,per_antiguedad,per_cargo,per_centrotrabajo,per_area,per_turno,per_salario,'
            . 'per_tipovinculacion,per_arl,per_eps,per_afp,per_escolaridad,per_profesion,per_estadocivi,per_raza,per_nohijos,per_otraperacargo,'
            . 'per_estratosocial,per_concentimientoformado FROM mer_persona';
    return $this->query($sql);
  }

  public function selectById($id) {
    $sql = 'SELECT per_id, per_cedula, per_nombres, per_apellidos,'
            . 'per_genero, per_fenacimiento, per_edad, per_lugarnacimiento,per_nacionalidad,per_lugarresidencia,per_notelefono,'
            . 'per_direccionresidencia,per_correo,per_fecingresoempresa,per_antiguedad,per_cargo,per_centrotrabajo,per_area,per_turno,per_salario,'
            . 'per_tipovinculacion,per_arl,per_eps,per_afp,per_escolaridad,per_profesion,per_estadocivi,per_raza,per_nohijos,per_otraperacargo,'
            . 'per_estratosocial,per_concentimientoformado FROM mer_persona WHERE per_id = :id';
    $params = array(
        ':id' => $id
    );
    return $this->query($sql, $params);
  }

  public function update(\nuevapersona $mer_persona) {
    $sql = 'UPDATE mer_persona SET per_id = :id,per_cedula = :ced,per_nombres = :nom,per_apellidos = :ape,per_genero = :gen,'
            . 'per_fenacimiento = :fen,per_edad = :edad,per_lugarnacimiento = :lun, per_nacionalidad =:nac,per_lugarresidencia= lur,'
            . 'per_direccionresidencia=:dir,per_notelefono=:tel,per_correo=:correo,per_fecingresoempresa=:feingre,per_antiguedad=:anti,per_cargo=:cargo'
            . 'per_centrotrabajo=:centro,per_area=:area,per_turno=:tur,per_salario=:sal,per_tipovinculacion=:tiv,per_arl=:arl,per_eps=:eps,per_afp=:afp'
            . 'per_escolaridad=:esc,per_profesion=:profe,per_estadocivi=:estadoc,per_raza=:raza,per_nohijos=:nohijos,per_otraperacargo=:otp,'
            . 'per_estratosocial=:estrato,per_concentimientoformado=:consent WHERE  per_id=:id';
    $params = array(
        ':id' => $mer_persona->getId(),
        ':ced' => $mer_persona->getCedula(),
        ':nom' => $mer_persona->getNombres(),
        ':ape' => $mer_persona->getApellidos(),
        ':gen' => $mer_persona->getGenero(),
        ':fen' => $mer_persona->getFenacimiento(),
        ':edad' => $mer_persona->getEdad(),
        ':lun' => $mer_persona->getLugarnacimiento(),
        ':nac' => $mer_persona->getNacionalidad(),
        ':lur' => $mer_persona->getLugarresidencia(),
        ':dir' => $mer_persona->getDireccionresidencia(),
        ':tel' => $mer_persona->getNotelefono(),
        ':correo' => $mer_persona->getCorreo(),
        ':feingre' => $mer_persona->getFecingresoempresa(),
        ':anti' => $mer_persona->getAntiguedad(),
        ':cargo' => $mer_persona->getCargo(),
        ':centro' => $mer_persona->getCentrotrabajo(),
        ':area' => $mer_persona->getArea(),
        ':tur' => $mer_persona->getTurno(),
        ':sal' => $mer_persona->getSalario(),
        ':tiv' => $mer_persona->getTipovinculacion(),
        ':arl' => $mer_persona->getArl(),
        ':eps' => $mer_persona->getEps(),
        ':afp' => $mer_persona->getAfp(),
        ':esc' => $mer_persona->getEscolaridad(),
        ':profe' => $mer_persona->getProfesion(),
        ':estadoc' => $mer_persona->getEstadocivi(),
        ':raza' => $mer_persona->getRaza(),
        ':nohijos' => $mer_persona->getNohijos(),
        ':otp' => $mer_persona->getOtrasperacargo(),
        ':estrato' => $mer_persona->getEstratosocial(),
        ':consent' => $mer_persona->getConcentimientoformado()
    );
    return $this->execute($sql, $params);
  }

}
