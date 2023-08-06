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
  body{
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100vh;
    background-color: #1D2951;
  }
  .header{
    color: white;
  }

.container {
    
    display: flex; 
    margin-top:5vh;
    justify-items: center;      
    justify-content: center;  
      
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
        <h2>CADASTRO DO DISCIPLINA</h2>
        <a class="navbar-brand" href="index.php">Voltar</a>
      </div>
    </nav>
  </div>

  <div class="container">
    <form method="GET" action="crudisciplina.php" >
        <p>Nome: <label for=""></label></p>
          <input type="text" name="nomedisciplina" required>

        <p>Semestre: <label for=""></label></p>
          <input type="text" name="semestre" required>

        <p>Carga Horaria: <label for=""></label></p>
          <input type="text" name="ch" required>

        <input type="submit" name="cadastrar" value="Cadastrar">
   
    </form>
</div>
</html>