<?php

include('Header.php');

?>

<form id='loginForm' method="post" action="">

  <div class="form-group">

    <label>Nome Completo</label>
    <input class="form-control" name='user'  placeholder="Ex:Antônio Morrendo Das Dores
">
  </div>

    <label>Usuário</label>
    <input class="form-control" name='user'  placeholder="Ex:AntônioDasDores123">
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input class="form-control" name='password'  placeholder="Senha">
  </div>

  <div class="form-group">
    <label>CEP</label>
    <input class="form-control"  title="Exemplo 05880-250" name='cep' type='number' placeholder="05880-250">
  </div>

  <div class="form-group">
    <label>Bairro</label>
    <input class="form-control" name='bairro'  placeholder="Ex:Capão Redondo">
  </div>



  <div class="form-group">
    <label>Rua</label>
    <input class="form-control" name='rua' placeholder="Ex:Rua Super bacana" type='password'>
  </div>

  <div class="form-group">
    <label>Número da casa</label>
    <input class="form-control" name='casa' placeholder="Ex:28" type='password'>
  </div>

  <div class="form-group">
    <label>Telefone 1</label>
    <input class="form-control" name='tel' placeholder="Ex:(11)98742-8742" type='password'>
  </div>

  <div class="form-group">
    <label>Telefone 2</label>
    <input class="form-control" name='tell' placeholder="Ex:(11)87422-9742" type='password'>
  </div>

  <button type="submit" id='enviar' class="btn btn-primary">Entrar</button><br><br>
</form>

</body>
</html>
