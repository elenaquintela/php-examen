<?php
require_once('./Plantilla.php');

class Eventual extends Plantilla
{

  protected int $webs;
  protected ?string $tipoWeb;
  protected int $sueldo;

  function __construct(string $dni, string $nombre, string $apellidos, int $webs, ?string $tipoWeb = '')
  {
    parent::__construct($dni, $nombre, $apellidos, null);
    $this->webs = $webs;
    $this->tipoWeb = $tipoWeb;
  }

  function getWebs() : int
  {
    return $this->webs;
  }

  function getTipoWeb() : string
  {
    return $this->tipoWeb;
  }

  function getSueldo() : int
  {
    switch ($this->tipoWeb) {
      case 'Multilenguaje':
        $this->sueldo = $this->webs * 1100;
        break;
      default:
        $this->sueldo = $this->webs * 800;
        break;
    }
    return $this->sueldo;
  }

  function __toString(): string
  {
    return sprintf("Nombre: %s %s<br> DNI: %s <br> Fecha de ingreso: %s años<br> Sueldo: %s €<hr>", $this->nombre, $this->apellidos, $this->dni, $this->anhoIngreso, $this->sueldo);
  }
}

$e = new Eventual('34891773F', 'Juan', 'González Salvado', 2, 'Multilenguaje');
$e2 = new Eventual('20382013J', 'Sonia', 'Pérez Montana', 3);
$e->getSueldo();
$e2->getSueldo();
echo $e;
echo $e2;
