<?php  
require_once('conexao.php');
$IdAluno=$_GET['Codigo'];
$consulta=mysqli_query($conn,"SELECT * FROM tbAlunos Where Id='$IdAluno'");
$resultado=mysqli_fetch_array($consulta);
?>
<center><h1>Editar Registro do Estudante</h1></center>
<hr>
				<center><h2>Nome: <?= $resultado[1];  ?> </h2></center>

<form method="POST" action="AtualizarDados.php">
	<input type="hidden" name="txtCodigo" value="<?= $resultado[0];  ?>">
	<label>Nome</label>
	<input type="text" name="txtNome" value="<?= $resultado[1];  ?>"><br>
	<label>Sexo</label>
	<input type="text" name="txtSexo" value="<?= $resultado[2];  ?>"><br>
	<label>Documento</label>
	<input type="text" name="txtDocumento" value="<?= $resultado[3];  ?>"><br>
	<label>Nascimento</label>
	<input type="date" name="txtNascimento" value="<?= $resultado[4];  ?>"><br>
	<input type="submit" name="btnAtualizar" value="Atualizar Dados">

</form>