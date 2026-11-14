<?php

require_once 'modelo/autor.php';
require_once 'modelo/biblioteca.php';
require_once 'modelo/editorial.php';
require_once 'modelo/libro.php';
require_once 'modelo/socio.php';


$a=new Autor();
$a->Nombre = 'Julio Cortázar ';
$a->Nacionalidad = 'Argentina';

$a1=new Autor();
$a1->Nombre = 'Jorge Luis Borges ';
$a1->Nacionalidad = 'Argentina';

$a2=new Autor();
$a2->Nombre = 'Gabriel García Márquez';
$a2->Nacionalidad = 'Colombiana';

$e=new Editorial();
$e->Nombre = 'Alfaguara';
$e->Pais = 'España';

$e1=new Editorial();
$e1->Nombre = 'Emecé';
$e1->Pais = 'Argentina';

$s=new Socio();
$s->Nombre = $_POST['nombre'];
$s->Apellido =  $_POST['apellido'];
$s->Email =  $_POST['email'];
$s->NumeroSocio =  $_POST['numeroSocio'];

$l=new Libro();
$l->Titulo = 'Rayuela';
$l->Isbn  = 978-950-07-1234-5;
$l->Anio  = 1963;
$l->Autor[] = $a;
$l->Editorial[] = $e;

$l1=new Libro();
$l1->Titulo = 'Ficciones';
$l1->Isbn  = 978-950-04-5678-9;
$l1->Anio  = 1944;
$l1->Autor[] = $a1;
$l1->Editorial[] = $e1;

$l2=new Libro();
$l2->Titulo = 'Cien años de soledad';
$l2->Isbn  = 978-849-75-4321-0;
$l2->Anio  = 1967;
$l2->Autor[] = $a3;
$l2->Editorial[] = $e;


$b=new Biblioteca();
$b->Nombre = 'Biblioteca Central Rosario';
$b->Direccion = 'San Martín 1234';
$b->Libros[] = $l;
$b->Libros[] = $l1;
$b->Libros[] = $l2;
$b->Socio[] = $s;

$c->MostrarBiblioteca();