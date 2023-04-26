<?php

abstract class Plantilla
{
  protected string $dni;
  protected string $nombre;
  protected string $apellidos;
  protected ?int $anhoIngreso;

  function __construct(
    string $dni,
    string $nombre,
    string $apellidos,
    ?int $anhoIngreso
  ) {
    $this->dni = $dni;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->anhoIngreso = $anhoIngreso;
  }

  function getDni()
  {
    return $this->dni;
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function getApellidos() {
    return $this->apellidos;
  }

  function getAnhoIngreso() {
    return $this->anhoIngreso;
  }

  function setDni(string $dni) {
    $this->dni = $dni;
  }

  function setNombre(string $nombre) {
    $this->nombre = $nombre;
  }

  function setApellidos(string $apellidos) {
    $this->apellidos = $apellidos;
  }

  function setAnhoIngreso(?int $anhoIngreso) {
    $this->anhoIngreso = $anhoIngreso;
  }

}


class Fijo extends Plantilla
{
  protected float $sueldo = 1200;

  function __construct (string $dni, string $nombre, string $apellidos,int $anhoIngreso) {
    parent::__construct($dni,$nombre, $apellidos,$anhoIngreso);
  }

  function getSueldo() {
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


