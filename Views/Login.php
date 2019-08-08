<?php

include('../Models/Header.php');

?>

<div class="code-php">

<?php

include('../Controller/LoginPHP.php');

?>


</div>

<form id='loginForm' class='mx-auto' method="post" action="#">
  <div class="form-group">
    <label>Usuário</label>
    <input class="form-control" name='user'  placeholder="Usuário">
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input class="form-control" name='password' placeholder="Senha" type='password'>
  </div>

  <button type="submit" id='enviar' class="btn btn-primary">Entrar</button><br><br>
  <small>  <?php echo $text; ?></small>

</form>

<br><br>
<?php

include('../Models/Footer.php');
include('../Controller/Login.php');

?>
<style media="screen">
  footer{
margin-top: 18em;
  }
</style>
