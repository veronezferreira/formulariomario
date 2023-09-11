<form method="POST" action="processausuario.php" enctype="multipart/form-data">

<Label> Nome: </label>

<input type="text" name="nome"><br><br>

<label> E-mail:</label>
<input type="email" name="email"><br><br>

<label>Senha:</label>
<input type="password" name="senha" size="1" required minlength="5" maxlength="40">

<select name="situacoe_id" id="situacoe_id">
    <option value="1">Liberado</option>
    <option value="2">Bloqueado</option>
    <option value="3">Aguardando</option>
</select>

<select name="niveis_acesso_id" id="niveis_acesso_id">
    <option value="select"> Nivel de Acesso</option>
    <option value="1">Total</option>
    <option value="2">Leitura</option>
    <option value="3">Edição e Leitura</option>

</select>

<input type="submit" value="Salvar">

</form>