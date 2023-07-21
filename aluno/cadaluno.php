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
  .conteiner{
    width: 100%;
    height: 100vh;
    background-color: #1D2951;
  }
.container {
    width: 99%;
    height: 60vh;
    display: flex; 
    margin-top:5vh;
    justify-items: center;      
    justify-content: center;  
    display: grid;
      grid-template-areas: 
          'form'
          'but'
          'but-home';
      grid-template-rows: 1vh auto; 
        
  }
  
  form{
    grid-area: form;
    display: flex; 
    flex-wrap: wrap;
    
  }
  
  .container .but{
    grid-area: but;
    margin-top:20px;
    margin-left:40%;
    text-align: center;
  
  }
  
  
  input {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      box-sizing: border-box;
      
    }

    .button {
      color: white;
      display: flex;
      justify-content: center;
       justify-items: center;      
      background-color: #4CAF50;
      border: none;
      color: white;
      text-align: center;
      padding: 9px;
      text-decoration: none;
      font-size: 16px;
      margin: 10px;
      cursor: pointer;
      width: 120px;
      height: 40px;
      
      margin-top: 350px;
    }

    .button a {
      color: white;
      text-decoration: none;
    }

    .button:hover {
      background-color:  #5a43;
      opacity: 0.9;
    }
    p{
      color: white;
    }
  
</style>
</head>

<body>
  <div class="conteiner">
  <div class="header">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #ffd55a; height:13VH;" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CADASTRO DO ALUNO</a>
      </div>
    </nav>
  </div>

  <div class="container">
    <form method="GET" action="crudaluno.php" >
        <div style="width: 50%;">
            <p>Nome Aluno: <label for=""></label></p>
            <input type="text" name="nomealuno">

            <p>Idade: <label for=""></label></p>
            <input type="text" name="idade">

            <p>Data de Nascimento: <label for=""></label></p>
            <input type="date" name="datanascimento" style="width: 100%;">
        </div>
      
        <div style="width: 50%;">
            <p>Endereço: <label for=""></label></p>
            <input type="text" name="endereco">

            <p>Status: <label for=""></label></p>
            <input type="text" name="estatus">

            <p>Matricula: <label for=""></label></p>
            <input type="text" name="matricula">
        </div>

        <div class="but">
        <input type="submit" name="cadastrar" value="Cadastrar">
        </div>

        
    </form>
    
    <button class="button"><a href="index.php">Voltar</a></button>
    
    
</div>
</div>




</html>