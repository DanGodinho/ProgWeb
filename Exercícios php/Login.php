<?php
	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$con = mysql_connect("localhost", "root", "");
	$select = mysql_select_db(icomp2);

	$sql = "INSERT INTO acesso VALUES('".$login."','".$senha."')";
	mysql_query ($sql,$con);

	$results = mysql_query ("Select * from acesso;",$con);

	if(mysql_num_rows ($result) > 0 ) { 
		$_SESSION['login'] = $login; 
		$_SESSION['senha'] = $senha; 
		header('location:exercicio1.html'); 

	} else{ unset ($_SESSION['login']); 
			unset ($_SESSION['senha']); 
			header('location:open.php'); 
		}

?>