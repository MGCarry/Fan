<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DC Supergirl</title>
        <link rel="stylesheet" href="../style/SuperGirlStyle.css">
    </head>
    <body>

        <p>
          Supergirl es una serie estrenada en el año 2015
        </p>

        <p>
            <em>Sinopsis</em>
            Supergirl es un drama de acción y aventuras basado en el personaje de DC Comics Kara Zor-El (Melissa Benoist), la prima de Superman, quien después de 12 años escondiendo sus poderes al mundo decide aceptar sus habilidades para convertirse en una superheroína.La trama comienza cuando Kara escapa a los 12 años de su planeta Krypton. Criada en la Tierra por los Danvers, Kara crece a la sombra de su hermana Alex (Chyler Leigh) y aprende a ocultar sus poderes para mantener su identidad secreta. Pasan los años y, a la edad de 24, Kara trabaja como ayudante de Cat Grant (Calista Flockhart), quien contrata al fotógrafo del Daily Planet James Olsen (Mehcad Brooks) como su nuevo director de arte.
            Sin embargo, los días de Kara ocultando sus poderes se acaban cuando Hank Henshaw (David Harewood), líder de una agencia secreta, la ficha para que le ayude a proteger a la población. Será entonces cuando Kara necesite dominar sus poderes y compaginarlos con sus relaciones personales
        </p>

        <h2>Supergirl</h2>

        <a>
            <img src="Supergirl.jpg" WIDTH=200 HEIGHT=300/>
        </a>

      

	        <table width="620px">
	<tr>
		<td width="20px"></td>
		<td width="200px">Titulo</td>
		<td width="200px">Fecha</td>
		<td width="200px">Respuestas</td>
	</tr>
<?php
	include("conexionBD.php");
	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		echo "<tr>";
			echo "<td><a href='foro.php?id=$id'>Leer</a></td>";
			echo "<td>$titulo</td>";
			echo "<td>".date("d-m-y,$fecha")."</td>";
			echo "<td>$respuestas</td>";
		echo "</tr>";
	}
?>
</table>
<a href="formulario.php"> nuevo tema </a>
    </body>

    </html>
