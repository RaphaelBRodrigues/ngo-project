<?php

include('Components/Header.php');

?>

<div class="code-php">

<?php

include('../Controller/LoginPHP.php');

?>


</div>

<form id='loginForm' class='mx-auto' method="post" action="#">
  <h2>Login</h2>
  <div class="form-group">
    <label>Usuário</label>
    <input class="form-control" name='user'   autofocus  placeholder="Usuário">
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input class="form-control" name='password' placeholder="Senha" type='password'>
  </div>

  <button type="submit" id='enviar' class="btn btn-primary">Entrar</button><br><br>
  <small>  <?php echo $text; ?></small>

</form>

<br><br>

<form>
<button id='logout' class='material-icons'>exit_to_app</button>
</form>

<?php

include('Components/Footer.php');
include('../Controller/LoginPHP.php');

?>
<style media="screen">
  footer{
margin-top: 1em;
  }
</style>
