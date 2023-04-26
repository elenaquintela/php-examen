<?php
require_once('./Plantilla.php');

class Fijo extends Plantilla
{
  protected int $sueldo = 1200;
  protected int $antiguedad;

  function __construct(string $dni, string $nombre, string $apellidos, int $anhoIngreso)
  {
    parent::__construct($dni, $nombre, $apellidos, $anhoIngreso);
    $anhoActual = date("Y");
    $this->antiguedad = $anhoActual - $this->anhoIngreso;
    if ($this->antiguedad >= 2 && $this->antiguedad <= 7) {
      $this->sueldo += $this->sueldo * 0.15;
    } else if ($this->antiguedad > 7) {
      $this->sueldo += $this->sueldo * 0.25;
    }
  }

  function getSueldo() : int
  {
    return $this->sueldo;
  }

  function __toString(): string
  {
    return sprintf("DNI: %d <br> Nombre: %s %s<br> Fecha de ingreso: %s <br> Antigüedad: %s años<br> Sueldo: %s €<hr>", $this->dni, $this->nombre, $this->apellidos, $this->anhoIngreso, $this->antiguedad , $this->sueldo);
  }
}

$f = new Fijo('49273881C', 'Isabel', 'Rodríguez García', 2013);
$f2 = new Fijo('22839116D', 'Dolores', 'Fernández Alonso', 2018);
$f3 = new Fijo('72829233S', 'Jaime', 'Santos Ruíz', 2022);
$f->getSueldo();
$f2->getSueldo();
$f3->getSueldo();
echo $f;
echo $f2;
echo $f3;
