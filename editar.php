<?php
require"config.php";


if (isset($_GET['id']) && !empty($_GET['id'])){
    $id =$_GET['id'];
}






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
    $sql = "UPDATE tbalunos;
    (mat, nome, datanascimento, cpf, endereco, telefone, sexo) VALUES (null, '$nome','$datanascimento','$cpf',
    '$endereco','$telefone',$sexo)";
    
    $sql =$pdo -> query($sql);

    print_r($sql);
    $inseriu=1;
    }
    if($inseriu==1){
    echo "dados inseridos com sucesso!";
    }


$sql = "SELECT * FROM tbalunos WHERE mat = '$id'";
$sql = $pdo ->query($sql);
if ($sql ->rowCount() > 0){
    $dados = $sql->fetch();
}else{
    header("Location:index.php");
}








?>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Alterar Dados</title>
</head>
<body>
<h1>Atualização de Dados</h1>
<form action="" method="post">
<label for = "nome" >Nome :</label><br> 
<input type = "text" name="nome" id="" value="<?php echo $dados['nome']?>" ><br>

<label for = "datadenascimento" >Data de Nascimento :</label><br>
<input type="text" name="datadenascimento" id="" value="<?php echo $dados['datanascimento'] ?>" > <br>
<label for = "cpf" > CPF :</label><br>
<input type="text" name="cpf" id="" value="<?php echo $dados['cpf'] ?>" > <br>
<label for = "endereco" >Endereço :</label><br> 
<input type="text" name="endereco" id="" value="<?php echo $dados['endereco'] ?>" > <br>
<label for = "telefone" > Telefone :</label><br>
<input type="text" name="telefone" id="" value="<?php echo $dados ['telefone']  ?>" ><br>
<label for = "sexo" > Sexo :</label><br>
<?php  if($dados['sexo'] ==1): ?>
<input type="radio" name="sexo" id="" value="1" checked >Homem <br>
<input type="radio" name="sexo" id="" value="2" >Mulher <br>
<?php else: ?>
<input type="radio" name="sexo" id="" value="1">Homem<br>
<input type="radio" name="sexo" id="" value="2" checked >Mulher <br>
<?php endif ?> 
<input type="submit" value="Salvar" name="salvar">

</form> 
</body>
</html>



