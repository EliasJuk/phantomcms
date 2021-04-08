<?php
  if(isset($_POST['action'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql = MySql::conectar()->prepare("SELECT * from `tb.admin_users` WHERE user = ? AND password = ?");
    $sql->execute(array($user, $password));

    if($sql->rowCount() == 1){
      $_SESSION['login'] = true;         
      header("Location: ".INCLUDE_PATH_ADMIN);
      die();
    }else{
      echo "USUARIO OU SENHA INCORRETA!";
    }
  }
?>

<div class="container">
  <div class="form-login">
    <form method="post">
      <input type="text" name="user" placeholder="Usuario"/>
      <br/>
      <input type="password" name="password" placeholder="Senha"/>
      <br/>
      <label>Lembrar-me</label>
      <input type="checkbox" name="lembrar"/>
      <br/>
      <input type="submit" name="action" value="ENTRAR"/>
    </form>
  </div>
</div>