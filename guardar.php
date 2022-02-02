<?php
	include_once 'index.php';
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];

	$libros = fopen("libros.txt", "a+");

	// Instrucciones para guardar los datos en el archivo libros.txt
	fputs($libros, "Aqui van a ir los libros");

	//$fclose($libros)
	
	$lecturaArchivo= fopen("libros.txt","r");

            while(!feof($lecturaArchivo)) {
                $linea = fgets($lecturaArchivo);
                echo "<br>Tu libro es: " . $titulo;
				echo "<br>la descripción es: " . $descripcion;
            }
            
?>