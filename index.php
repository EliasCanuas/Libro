<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leer archivo de texto con PHP</title>
    <!-- Incluir bulma.min.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>

<body>

    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">Contenido al archivo de texto plano</p>
        </div>
    </section>

    <section class="section is-medium columns">
        <div class="column">Columna 01</div>
        <div class="column">
            <?php
            $lecturaArchivo = fopen("C:\Users\Admin\Documents\dato.txt", "r");

            while (!feof($lecturaArchivo)) {
                $linea = fgets($lecturaArchivo);
                echo nl2br($linea);
            }
            fclose($lecturaArchivo);
            ?>
        </div>
        <div class="column">columna 03</div>
    </section>

    <section>
        <?php
            $crearArchivo= fopen("notas.txt","w");
            fwrite($crearArchivo, "Esta es la primera linea de mi archivo de texto");
            fputs($crearArchivo, "<br>Esta es mi segunda linea");
            fclose($crearArchivo);
            ?>
    </section>

    <section>
        <?php
            $lecturaArchivo= fopen("notas.txt","r");

            while(!feof($lecturaArchivo)) {
                $linea = fgets($lecturaArchivo);
                echo nl2br($linea);
            }

            fclose($lecturaArchivo);
            ?>
    </section>

    <section class="section">
		
		<form action="guardar.php" method="post">
			<div>
				<label>Título:</label>
				<input type="text" class="input" name="titulo" placeholder="Escribe el título">
			</div>

			<div>
				<label>Descripción:</label>
				<textarea name="descripcion" class="input" placeholder="Agregue la descripción">
					
				</textarea>
			</div>

			<input type="submit" class="button is-link" value="Guardar">
		</form>

	</section>
    
</body>

</html>