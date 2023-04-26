<?php

abstract class Plantilla
{
  protected string $dni;
  protected string $nombre;
  protected string $apellidos;
  protected int $anhoIngreso;

  function __construct(
    string $dni,
    string $nombre,
    string $apellidos,
    int $anhoIngreso
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

  function setAnhoIngreso(int $anhoIngreso) {
    $this->anhoIngreso = $anhoIngreso;
  }

}


