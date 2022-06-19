<?php
	$con = mysqli_connect("localhost","usuarioinf324","123456");
    mysqli_select_db($con,"cursotemporada");
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