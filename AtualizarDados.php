<?php 
require_once('conexao.php');

$codigo=$_POST['txtCodigo'];
$nome=$_POST['txtNome'];
$sexo=$_POST['txtSexo'];
$documento=$_POST['txtDocumento'];
$nascimento=$_POST['txtNascimento'];

$atualizar=mysqli_query($conn,"UPDATE tbAlunos set nome='$nome', sexo='$sexo', documento='$documento', nascimento='$nascimento' Where Id='$codigo'");
if($atualizar==true){
echo "<script>
alert('Dados atualizados com êxito');
window.location.href='paginaInicial.php';
</script> ";
}else{
echo "<script>
alert('Falha na atualização dos dados. Consultar Administrador');
window.location.href='editar.php';
</script> ";
}
?>