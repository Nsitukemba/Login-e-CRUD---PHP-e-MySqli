<?php  
require_once('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página Inicial</title>
</head>
<body>
		<center><h1>CRUD Usando php e Mysqli</h1></center>
		<center><h2>avatar-api@sapo.pt || penelson-api@sapo.pt</h2></center>
		<hr>
		<center><h2>ESPU | Programação Web II</h2></center>
		<hr>


		<form method="POST" action="cadastrarAlunos.php">
			<label>Nome do Aluno</label>
			<input type="text" name="txtNome"><br>
			<label>Sexo</label>
			<select name="txtSexo">
				<option value="Masculino">Masculino</option>
				<option value="Feminino">Feminino</option>
			</select><br>
			<label>Documento</label>
			<input type="text" name="txtDocumento"><br>
			<label>Nascimento</label>
			<input type="date" name="txtNascimento"><br>

			<input type="submit" name="btnCadastrar" value="Registrar Aluno">
		</form>

		<hr>
			<center><h2>Lista de registros da Base de Dados</h2></center>
		<hr>
				<table>
					<thead>
						<th>Cód. Aluno</th>
						<th>Nome</th>
						<th>Sexo</th>
						<th>Documento</th>
						<th>Nascimento</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
					</thead>
					<tbody>
						<?php  
							$dados=mysqli_query($conn,"SELECT * FROM tbAlunos");
							while ($linhas=mysqli_fetch_array($dados,MYSQLI_NUM)) { 
						?>		
					<tr>
						<td> <?= $linhas[0]; ?></td>
						<td> <?= $linhas[1]; ?></td>
						<td> <?= $linhas[2]; ?></td>
						<td> <?= $linhas[3]; ?></td>
						<td> <?= $linhas[4]; ?></td>
						<td> <a href="editar.php?Codigo=<?= $linhas[0] ?>">Editar</a></td>
						<td> <a href="excluir.php?Codigo=<?= $linhas[0] ?>">Excluir</a> </td>
					</tr>

						<?php 	 }  ?>
						
					</tbody>
					
				</table>
</body>
</html>