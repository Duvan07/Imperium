<?php

interface IUsuario {

    public function select();

    public function selectById($id);

    public function insert(usuario $mer_usuario);

    public function update(usuario $mer_usuario);

    public function delete($id);
}
