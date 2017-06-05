<?php

interface IRol {

    public function select();

    public function selectById($id);

    public function insert(rol $Rol);

    public function update(rol $Rol);

    public function delete($id);

    public function search($user, $password);
}
