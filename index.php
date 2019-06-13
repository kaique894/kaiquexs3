

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="adicionar.php">Adicionar Novo Aluno</a>
   
       <table whidth=100%  border=1>
        
          <tr>
        
           <td>Nome:</td>
           <td>Data de Nascimento:</td>
           <td>CPF:</td>
           <td>Telefone:</td>
           <td>Endereço:</td>
           <td>sexo:</td>
           
           </tr>
           <?php
           $sql = "SELECT * FROM tbalunos";
           $dados = $pdo->query($sql);
           if ($dados-> rowcount() > 0){
               foreach($dados->FetchAll() as $aluno){

               echo "<tr>";
               echo "<td>" . $aluno['nome'] . "<td>";
               echo "<td>" . $aluno['datanascimento'] . "</td>";
               echo "<td>" . $aluno['cpf'] . "</td>";
               echo "<td>" . $aluno['telefone'] . "</td>";
               echo "<td>" . $aluno['endereco'] . "</td>";
               if ($aluno['sexo'] == 1 ){
                   echo "<td>Homem</td>";
               }else{
                   echo "<td>Mulher</td>";
               }
               echo "<td><a href='editar.php?id=" . $aluno['mat'] .">Editar</a></td>";
               echo "</tr>";
            }

            }else{
                echo "Não há alunos Cadastrado...";
            
            }
        
           
           ?>
           </table>



</body>
</html>