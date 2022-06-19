<html>
<center>
<body background="fondo1.jpg" bgcolor="5499C7">
UNIVERSIDAD MAYOR DE SAN ANDRES <br>
Preinscripcion  a Cursos de <br>
temporada de invierno<br>
<form action=" " method="POST">
<input type="hidden" name="id" value=""/> <br>

Nombre Completo:  
<input type="text" name="nombrecompleto" value="<?php echo $nombrecompleto;?>"/> <br>
Registro Univ. ID :
<input type="text" name="id" value="<?php echo $id;?>"/> <br>
Carnet de identidad:
<input type="text" name="cidentidad" value="<?php echo $ci;?>"/> <br>
Materias a crusas en temporada<br>
<img src="preins.png" width="600" height="200" style="float:center"><br>
<br>
<br>
sigla M 1
<input type="text" name="cidentidad" value="<?php echo $sigla1;?>"/> <br>
Materia 1
<input type="text" name="cidentidad" value="<?php echo $materia1;?>"/> <br>
Sigla M 2
<input type="text" name="cidentidad" value="<?php echo $sigla2;?>"/> <br>
Materia 2
<input type="text" name="cidentidad" value="<?php echo $materia2;?>"/> <br>
<input type="submit" name="butonGuardar" value="Guardar">
</form>
<?php
	$con = mysqli_connect("localhost","usuarioinf324","123456");
    mysqli_select_db($con,"preinsc");
	$n = $_POST['nombrecompleto'];
	$ru = $_POST['registroUniv'];
	$ci = $_POST['ci'];
	$s1 = $_POST['sigla1'];
	$M1 = $_POST['materia1'];
	$s2 = $_POST['sigla2'];
	$M2 = $_POST['materia2'];
	
	$sqlpreinsc ="INSERT into preinsc(nombrecompleto, registroUniv, ci, sigla1, materia1, sigla2, materia2)
										VALUES ('$n','$ru','$ci','$s1','$M1','$s2','$M2')";
	$ejecutado = mysqli_query($con,$sqlpreinsc);
	

?>
</body>
</center>
</html>