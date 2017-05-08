<?php

class config {

  private $path;
  private $drive;
  private $host;
  private $port;
  private $dbname;
  private $user;
  private $password;
  private $hash;
  private $url;
  
  public function getPath() {
    return $this->path;
  }

  public function getDrive() {
    return $this->drive;
  }

  public function getHost() {
    return $this->host;
  }

  public function getPort() {
    return $this->port;
  }

  public function getDbname() {
    return $this->dbname;
  }

  public function getUser() {
    return $this->user;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getHash() {
    return $this->hash;
  }

  public function getUrl() {
    return $this->url;
  }

  public function setPath($path) {
    $this->path = $path;
  }

  public function setDrive($drive) {
    $this->drive = $drive;
  }

  public function setHost($host) {
    $this->host = $host;
  }

  public function setPort($port) {
    $this->port = $port;
  }

  public function setDbname($dbname) {
    $this->dbname = $dbname;
  }

  public function setUser($user) {
    $this->user = $user;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function setHash($hash) {
    $this->hash = $hash;
  }

  public function setUrl($url) {
    $this->url = $url;
  }

}
