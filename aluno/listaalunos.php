<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
  .conteiner{
    width: 100%;
    height: 100vh;
    background-color: #1D2951;
  }
  .table{
    background-color: white;
    width: 100%;
  }
  
  .button {
     
      background-color: #4CAF50;
      border: none;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      display: block;
      font-size: 16px;
      margin: 10px;
      margin-top: 30px;
      cursor: pointer;
      width: 120px;
      border-radius: 5px;
      margin-left:45%;
    }

    .button a {
      color: white;
      text-decoration: none;
    }

    .button:hover a {
      background-color:  #5a43;
      opacity: 0.9;
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
        <a class="navbar-brand" href="#">LISTA DOS ALUNOS</a>
      </div>
    </nav>
  </div>    

<div class="container mt-3">

  <table class="table table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th style="padding-left: 0%;">ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>DATA DE NASCIMENTO</th>
            <th>ENDEREÇO</th>
            <th>ESTATUS</th>
            <th>MATRICULA</th>
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
                <td><?php echo $value['matricula'] ?></td>

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


<?php         
   echo "<button class='button button3'><a href='index.php'>voltar</a></button>";
?>
</body>
</html>