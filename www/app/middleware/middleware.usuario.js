function middlewareusuario($this, $sessionStorage, Administrador) {
    if ($sessionStorage.usuario.rol_id == Administrador) {
        $this.next();
    } else {
        $this.redirectTo('/controlentradasalida');
    }
}


