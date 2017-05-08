<?php

class index extends controllerExtended {

  public function main(\request $request) {
    $rsp = 'Julian'; //2 + $request->getQuery(0);
    $this->setParam('nombre', $rsp);
    $this->setView('index');
  }

}
