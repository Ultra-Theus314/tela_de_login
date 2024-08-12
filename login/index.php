<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    /* na primeira linha usaremos o “action=ope.php” para que o formulário repasse as informações para a página ope.php */
<form method="post" action="ope.php" id="formlogin" name="formlogin" >
    <fieldset id="fie">
        <legend>LOGIN</legend><br />
        <label>NOME : </label>
        
        <label for="login"><input type="text" name="login" id="login"  /><br /></label>
        <label>SENHA :<input type="password" name="senha" id="senha" /><br /></label>
        
        <input type="submit" value="LOGAR  "  />
    </fieldset>
</form>
</body>
</html>