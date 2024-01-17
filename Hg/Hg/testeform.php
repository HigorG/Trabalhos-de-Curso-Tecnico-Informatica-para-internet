<html>
	<head>
		<title>Cadastrando...</title>
	</head>
	<body>
		<?php
			//include_once('conexao.php');
			$host = "localhost";
			$database = "cadastro";
			$username = "root";
			$password = "";
			// Create connection
			$conn = mysqli_connect($host, $username, $password, $database);
	
			$nome=$_POST['nome'];
			$email=$_POST['email'];
			$senha=$_POST['senha'];
			$sql= "INSERT INTO usuarios(nome, email, senha) 
			VALUES ('$nome','$email', '$senha')";
			mysqli_query($conn, $sql);
			if (mysqli_query($conn, $sql)){
				echo"(usuario cadastrado com sucesso!)<br>";
				echo"<a href=formlogin.html>fazer o Login</a>";
			}
			else{
				echo "Error:". $sql ."<br/>".mysqli_error($conn);
				echo"nada feito";
			}
			mysqli_close($conn);			
			
		?>
</body>

</html>