<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
  .header{
    color: white;
  }
  body{
    background-color: #1D2951;
    padding: 0px ;
  }
  .container-mt-3{
      padding: 10px 0px;
      margin: 0px;
  }
  .table{
    background-color: white;
  }
</style>
<body>
<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM aluno');
  $retorno->execute();

?> 
<div class="conteiner">
<div class="header">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #ffd55a; height:13VH;" >
      <div class="container-fluid">
        <h2>LISTA DOS ALUNOS</h2>
        <a class="navbar-brand" href="index.php">Voltar</a> 
      </div>
    </nav>
  </div>    

<div class="container-mt-3">

  <table class="table table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th style="padding-left: 0%;">ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>DATA DE NASCIMENTO</th>
            <th>ENDEREÇO</th>
            <th>ESTATUS</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($retorno->fetchAll() as $value) { ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['nome'] ?></td>
                <td><?php echo $value['idade'] ?></td>
                <td><?php echo $value['datanascimento'] ?></td>
                <td><?php echo $value['endereco'] ?></td>
                <td><?php echo $value['estatus'] ?></td>
                

                <td>
                    <form method="POST" action="altaluno.php">
                        <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                        <button name="alterar" type="submit">Alterar</button>
                    </form>
                </td>

                <td>
                    <form method="GET" action="crudaluno.php">
                        <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                        <button name="excluir" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>  

</body>
</html>