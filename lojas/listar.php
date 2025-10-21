<?php
require_once "../src/loja_crud.php";

$lojas= buscarlojas($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIstar lojas</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>LOJAS</h1>
    <a href="inserir.php">+ Nov loja</a>
    <a href="../index.php">← Voltar</a>

    <table>
        <!-- Titulo da tabela -->
        <caption>RElação de Lojas</caption>

        <!-- tr= ligna da tabela -->
        <tr>
            <!-- th= é a celula ou titulo do cabeçalho -->
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>

<?php
  foreach($lojas as $loja){ 
?>
     <!--ligna da tabela e td = coluna -->  
         <tr> 
            <td>  <?=$loja['id']?> </td>
            <td> <?=$loja['nome']?> </td>

            <td></td>
            
        </tr>

<?php
  }
?>
    </table>
</body>
</html>