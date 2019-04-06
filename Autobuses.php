<?php
/**
 * Created by PhpStorm.
 * User: Lolita Tortuguita
 * Date: 5/4/2019
 * Time: 15:39
 */

class Autobuses
{
    private $nombre;
    private $color;
    private $capacidad;

    function __construct($nombre,$color,$capacidad)
    {
        $this->nombre=$nombre;
        $this->color=$color;
        $this->capacidad=$capacidad;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * @param mixed $capacidad
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }

    public function toString(){
        $resultado = "Nombre: ".$this->nombre;
        $resultado .="</br>";
        $resultado .= "Color: ".$this->color;
        $resultado .="</br>";
        $resultado .= "Capacidad: ".$this->capacidad;
    }

    public function darDeAlta(){
        $consulta = 'INSERT into autobuses(Nombre,Color,Capacidad)
                  VALUES ("'.$this->nombre.'","'.$this->color.'","'.$this->capacidad.'")';
        return $consulta;
    }
}