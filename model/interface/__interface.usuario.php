<?php

interface IUsuario {

  public function select();

  public function selectById($id);

  public function insert(usuario $usuario);

  public function update(usuario $usuario);

  public function delete($id);
}
