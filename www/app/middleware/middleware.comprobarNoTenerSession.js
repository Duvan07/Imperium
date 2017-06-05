/**
 * middleware el cual comprueba si hay una session en linea
 * 
 */
function middlewareComprobarNoTenerSession($this, $sessionStorage) {
  if (typeof $sessionStorage.usuario == "undefined") {
    $this.next();
  } else {
    $this.redirectTo('/menuprincipal');
  }
}

