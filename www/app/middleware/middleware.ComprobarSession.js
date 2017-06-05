/**
 * middleware el cual comprueba si hay una session en linea
 * 
 */
function middlewareComprobarSession($this, $sessionStorage) {
  if (typeof $sessionStorage.usuario == "undefined") {
    $this.redirectTo('/');
  } else {
    $this.next();
  }
}

