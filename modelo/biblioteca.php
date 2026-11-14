<?php

class Biblioteca
{
    public $Nombre;
    public $Direccion;
      public $Socio=[];
    public $Libros = [];
    public function MostrarBiblioteca(){
        echo 'Nombre Biblioteca: '.$this->NombreBiblioteca .  '<br>';
        echo 'Horas: '.$this->Libro .  '<br>';

        foreach ($this->Alumnos as $alumno) {
            echo $alumno->Nombre. '<br>';
            echo $alumno->Apellido. '<br>';
            echo $alumno->Documento;
        }
      
    }
}