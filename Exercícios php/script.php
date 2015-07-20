<html>
 <head> <meta charset = "UTF-8"></head>
<?php 
	//
	$nome = $_GET["nome"];
	$sex = $_GET["sex"];
	$comentario = $_GET["coment"];
	echo "Nome:" . $nome;
	echo "</br>";

	if($sex==1){echo "Masculino";}	
	else echo "Feminino";

	echo "</br>";
	echo "Comentário:" . $comentario;

	//
	$conexao = mysql_connect("localhost", "root", "");
	$banco = mysql_select_db("icomp2",$conexao);
	
	$sql = "INSERT INTO aluno VALUES('".$nome."','".$sex."','".$comentario."')";
	mysql_query ($sql,$conexao);
	

	//
	$results = mysql_query ("Select * from aluno;",$conexao);
	echo "<table border=2>";
	echo "<tr><th>Nome</th><th>Sexo</th><th>Comentario</th></tr>";
	
	$row = mysql_fetch_row($results);
	
	do {
		echo "<tr><td>{$row[0]}</td>";
		echo "<td>{$row[1]}</td>";
		echo "<td>{$row[2]}</td></tr>";
		$row = mysql_fetch_row($results);
	} while ($row);
	
	echo "</table>";
	mysql_close($conexao);
?>
</html>
