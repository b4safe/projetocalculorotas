<?php
session_start();
include('verifica_login.php');
include('conexao.php');
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

<?php
if (!'conexao.php') {
 die("conexao falhou :" .mysqli_connect_error());
}

echo "conectado com sucesso"

?>









<!--LOGOUT -->

<h2><a href="logout.php">Sair</h2>