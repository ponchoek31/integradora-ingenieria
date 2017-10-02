
<?php


	require("conexion.php");

	$username=$_POST['uname'];
	$pass=$_POST['psw'];

	$query=mysqli_query($conn, "SELECT * FROM login WHERE email='$username' AND password='$pass'");
	$count=mysqli_num_rows($query);
	
	if ($count!=0) {
		while ($datos=mysqli_fetch_array($query)) {
			session_start();
			$_SESSION['Nombre']=$datos['user'];
			$_SESSION['rol']=$datos['rol'];
			header('location:admin.php');
		}	
	}else{
		echo '<script>alert("El usuario no existe")</script> ';
		echo "<script>location.href='index.php'</script>";
	}

?>