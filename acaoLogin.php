
<?php
require_once('conexao.php');

$nome=$_POST['txtNome'];
$senha=md5($_POST['txtSenha']);

$login=mysqli_query($conn,"SELECT * FROM tbUsuarios where Usuario='$nome' AND Senha='$senha'");

if(mysqli_num_rows($login)!=0){

echo "<script>
	alert('Login efetuado com èxito');
window.location.href='paginaInicial.php';
</script>
	";
}else{
	echo "<script>

	alert('Usuario nao registrado no site');
window.location.href='index.html';
</script>
	";

}
?>