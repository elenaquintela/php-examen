<?php
require_once('./Plantilla.php');

class Fijo extends Plantilla
{
  protected int $sueldo = 1200;

  function __construct(string $dni, string $nombre, string $apellidos, int $anhoIngreso)
  {
    parent::__construct($dni, $nombre, $apellidos, $anhoIngreso);
  }

  function getSueldo() : int
  {
    $anhoActual = date("Y");
    $diff = $anhoActual - $this->anhoIngreso;
    if ($diff >= 2 && $diff <= 7) {
      $this->sueldo += $this->sueldo * 0.15;
    } else if ($diff > 7) {
      $this->sueldo += $this->sueldo * 0.25;
    }
    return $this->sueldo;
  }
}

$f = new Fijo('49273881C', 'Isabel', 'Rodríguez García', 2013);
$f->getSueldo();
print_r($f);
