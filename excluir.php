<?php  
require_once('conexao.php');
$Kimpa=$_GET['Codigo'];
$excluir=mysqli_query($conn,"DELETE FROM tbAlunos Where id='$Kimpa'");
if($excluir==true){
echo "<script>
alert('Dados do aluno excluido com êxito');
window.location.href='paginaInicial.php';
</script>
";
}else{
echo "<script>
alert('Erro ao excluir. Consultar Administrador');
window.location.href='paginaInicial.php';
</script>
";
}
?>