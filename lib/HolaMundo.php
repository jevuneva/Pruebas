<?php
class HolaMundo
{
private $nombre;
function __construct($nombre)
{

31

$this->nombre = $nombre;
}
function __toString()
{
return sprintf ("Hola, %s.\n", $this->nombre);
}
}