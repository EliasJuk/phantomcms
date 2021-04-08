<?php
  # ARQUIVO CONTENDO AS VARIAVEIS DE CONEXAO
  include('config.php');

  # CLASSE DE CONEXAO
  include('classes/MySql.php');

  # GERA A ESTRUTURA INICIAL DO BANCO DE DADOS
  Generate::generate_database();
?>

<?php
  # CONSULTA OS USUARIOS DENTRO DO BANCO DE DADOS
  $sql = MySql::conectar()->prepare("SELECT * from `tb.admin_users`");
  $sql->execute();

  while ($line = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "Usuario: {$line['user']} | Senha: {$line['password']}<br>";
  }
?>