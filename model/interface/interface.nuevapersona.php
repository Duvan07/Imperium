<?php

interface INuevapersona {

    public function select();

    public function selectById($id);

    public function insert(nuevapersona $mer_persona);

    public function update(nuevapersona $mer_persona);

    public function delete($id);
    
    public function search($nombre);
}

