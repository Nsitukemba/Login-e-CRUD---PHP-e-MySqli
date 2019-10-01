<?php 
require_once('conexao.php');
$A=$_POST['txtNome'];
$B=$_POST['txtSexo'];
$C=$_POST['txtDocumento'];
$D=$_POST['txtNascimento'];

$cadastrar=mysqli_query($conn,"INSERT INTO tbAlunos (nome,sexo,documento,nascimento) VALUES ('$A','$B','$C','$D')");

if($cadastrar==true){

echo "<script>
alert('Estudante registrado com êxito');
window.location.href='paginaInicial.php';
</script>
";
}else{

echo "<script>
alert('Falha no registro. Consultar administrador');
window.location.href='paginaInicial.php';
</script>
";
}

 ?>