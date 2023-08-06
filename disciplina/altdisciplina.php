<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style type="text/css">
  
 .conteiner{
    width: 100%;
    height: 100vh;
    background-color: #1D2951;
  }
  .header{
    color: white;
  }

  .box {
    width: 99%;
    height: 60vh;
    display: flex; 
    margin-top:5vh;
    justify-items: center;      
    justify-content: center;  
  }

  input {
      width: 400px;
      padding: 8px;
      margin-top: 5px;
      box-sizing: border-box;
  }

  p{
      color: white;
  } 
  .status1{
      height: 44px; 
      margin-top:5px;
      width: 99%;
  }
</style>
<body>
<body>
  <div class="conteiner">
  <div class="header">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #ffd55a; height:13VH;" >
    <div class="container-fluid">
        <h2>ALTERAR DISCIPLINA</h2>
      </div>
    </nav>
  </div>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $semestre = $array_retorno['semestre'];
   $ch = $array_retorno['ch'];
?>

<div class="box">

  <form method="POST" action="crudisciplina.php" >

      <p>Nome: <br> <input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina?> ></p>
                                                
      <p>Semestre: <br> <input type="text" name="semestre" id="" value=<?php echo $semestre ?> ></p>  

      <p>Carga Horaria: <br> <input type="text" name="ch" id="" value=<?php echo $ch ?> ></p>

        <input type="submit" name="update" value="Alterar">
     
  </form>
  
  </div>
  </div>
</body>
</html>