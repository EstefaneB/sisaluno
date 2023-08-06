<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <head>
<style type="text/css">
  .header{
    color: white;
  }

  body{
    width: 100%;
    height: 100vh;
    background-color: #1D2951;

  }
  
.container { /* A grid é na divs não no que está dentro da div */
    display: flex; 
    margin-top:5vh;
    justify-items: center;      
    justify-content: center;  
    display: grid;
    grid-template-areas: 
          'form'
          'but'
          ;
    grid-template-rows: 1vh; 
       
  }


  
  form{
    grid-area: form;
    display: flex; 
    flex-wrap: wrap;
  }
  form div{
    width: 49%;
  }
  
  .container .but{
    grid-area: but;
    margin-top:20px;
    margin-left:30%;
    text-align: center;
  }
  
  input {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      box-sizing: border-box;
      
    } 
    p{
      color: white;
    }
    .status{
      height: 29px;
    }
    .status1{
      height: 44px;
      width: 270px;
    }

</style>
</head>

<body>
 
  <div class="header">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #ffd55a; height:13VH;" >
    <div class="container-fluid">
      <h2>CADASTRO DO ALUNO</h2>  
      <a class="navbar-brand" href="index.php">Voltar</a>
    </div>
    </nav>
  </div>
  <div class="container">
    <form method="GET" action="crudaluno.php" >
        <div>
            <p>Nome Aluno: <label for=""></label></p>
            <input type="text" name="nome" required>

            <p>Idade: <label for=""></label></p>
            <input type="number" min= "15" max= "18" name="idade" required>

            <p>Data de Nascimento: <label for=""></label></p>
            <input type="date" name="datanascimento" required style="width: 100%;">
        </div>

        <hr width="2%">

        <div>

            <p>Endereço: <label for=""></label></p>
            <input type="text" name="endereco" required>

            <p class="status">Status: <label for=""></label></p>
            <select class="status1" name="estatus" id="" required>
            <option value="1"> Ativado</option>
            <option value="0"> Desativado</option>
            </select>
  
        </div>

        <div class="but">
          <input type="submit" name="cadastrar" value="Cadastrar">
        </div>
    </form>   
    
</div>
</html>