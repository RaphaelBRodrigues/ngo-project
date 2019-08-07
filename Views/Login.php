<?php

include('Header.php');

?>




<form id='cadastroForm' method="post" action="">
  <div class="form-group">
    <label>Usuário</label>
    <input class="form-control" name='user'  placeholder="Usuário">
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input class="form-control" name='password' placeholder="Senha" type='password'>
  </div>

  <button type="submit" id='enviar' class="btn btn-primary">Entrar</button><br><br>
  <small>Caso esqueça a senha procure um dos administradores no local</small>
</form>

</body>
</html>
