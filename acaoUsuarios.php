<?php
require_once('conexao.php');
$nome=$_POST['txtNome'];
$senha=md5($_POST['txtSenha']);
$nivel=$_POST['txtNivel'];

$cadastrar=mysqli_query($conn,"INSERT INTO tbUsuarios (Usuario, Senha, Nivel) VALUES ('$nome','$senha','$nivel')");
if($cadastrar==true){
	echo "<script>
	alert('Usuário registrado com êxito');
	window.location.href='index.html';
	</script>";
}else {
	echo "<script>
	alert('Falha no registro do Usuário');
	window.location.href='cadastrarUsuarios.html';
	</script>";
}
?>