<?php
require_once('./Plantilla.php');

class Eventual extends Plantilla {

  protected int $webs;
  protected ?string $tipoWeb;
  protected float $sueldo;

  function __construct (string $dni, string $nombre, string $apellidos, int $webs, ?string $tipoWeb) {
    parent::__construct($dni, $nombre, $apellidos, null);
    $this->webs = $webs;
    $this->tipoWeb = $tipoWeb;
  }

  function getWebs() {
    return $this->webs;
  }

  function getTipoWeb() {
    return $this->tipoWeb;
  }

  function getSueldo() {
    switch ($this->tipoWeb) {
      case 'Multilenguaje':
        $this-> sueldo = $this->webs * 1100;
        break;
      default:
        $this-> sueldo = $this->webs * 800;
        break;
    }
    return $this->sueldo;
  }
}

$e = new Eventual('34891773F', 'Juan', 'González Salvado', 2, 'Multilenguaje');
print_r($e);

