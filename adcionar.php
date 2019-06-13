<?php

require "config.php";
$inseriu=0;
if(isset($_POST['nome'])&& empty($_POST['nome'])==false){
$nome=addslashes($_POST['nome']);
$datanascimento=$_POST['datanascimento'];

if(is_numeric($_POST['cpf'])){
$cpf=$_POST['cpf'];
}else{
echo "ERRO, CPF INVÁLIDO";
}
if(is_numeric($_POST['telefone'])){
$telefone=$_POST['telefone'];
}else{
echo "ERRO, TELEFONE INVÁLIDO";
}

$endereco=$_POST['endereco'];
$sexo=$_POST['sexo'];

//echo $nome ."<br>";
//echo $datadenascimento ."<br>";
//echo $cpf ."<BR>";
//echo $telefone ."<br>";
//echo $sexo ;
$sql = "INSERT INTO tbalunos
(mat, nome, datanascimento, cpf, endereco, telefone, sexo) VALUES (null, '$nome','$datanascimento','$cpf',
'$endereco','$telefone',$sexo)";

$sql =$pdo -> query($sql);
//print_r($sql);
$inseriu=1;
}
if($inseriu==1){
echo "dados inseridos com sucesso!";
}

?>





<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Adicionar Dados</title>
</head>
<body>
<h1>Cadastro</h1>
<form action="" method="post">
<label for = "nome" >Nome :</label><br> 
<input type = "text" name="nome" id="" value="" ><br>

<label for = "datanascimento" >Data de Nascimento :</label><br>
<input type="text" name="datanascimento" id="" value="" > <br>
<label for = "cpf" > CPF :</label><br>
<input type="text" name="cpf" id="" value="" > <br>
<label for = "endereco" >Endereço :</label><br> 
<input type="text" name="endereco" id="" value="" > <br>
<label for = "telefone" > Telefone :</label><br>
<input type="text" name="telefone" id="" value="" ><br>
<label for = "sexo" > Sexo :</label><br>
<input type="radio" name="sexo" id="" value="2" checked >Homem <br>
<input type="radio" name="sexo" id="" value="1" checked >Mulher <br> 
<input type="submit" value="Salvar" name="salvar">

</form> 
</body>
</html>