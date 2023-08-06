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

    .button {
      color: white;
      display: flex;
      justify-content: center;
      justify-items: center;      
      background-color: #4CAF50;
      border-radius: 3px;
      border: none;
      color: white;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin: 10px;
      cursor: pointer;
      width: 49%;
      height: 40px;
      margin-top: 350px;
      margin-left: 58px;
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
      <h2>CADASTRO DO PROFESSOR</h2>
      <a class="navbar-brand" href="index.php">Voltar</a>
    </div>
  </div>
  <div class="container">
    <form method="GET" action="crudprof.php" >
        <div>

            <p>Nome: <label for=""></label></p>
            <input type="text" name="nome" required>

            <p>Idade: <label for=""></label></p>
            <input type="number" min= "18" max= "60" name="idade" required>

            <p>Data de Nascimento: <label for=""></label></p>
            <input type="date" name="datanascimento" style="width: 100%;" required>

        </div>

        <hr width="2%">
      
        <div>

            <p>Endereço: <label for=""></label></p>
            <input type="text" name="endereco" required>

            <p class="status">Status: <label for="" required></label></p>
            <select class="status1" name="estatus" id="">
            <option value="1"> Ativado</option>
            <option value="0"> Desativado</option>
            </select>

            <p>CPF: <label for=""></label></p>
            <input type="text" name="cpf" id="" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                title="Digite o CPF no formato XXX.XXX.XXX-XX" required >
            
        </div>

        <div class="but">
        <input type="submit" name="cadastrar" value="Cadastrar">
        </div>

    </form>
</div>
</html>