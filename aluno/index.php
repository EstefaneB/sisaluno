<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    .header{
        color: white;
    }
    .conteiner{
        width: 100%;
        height: 90vh;
        background-color: #1D2951;
        display: flex;
        justify-content: center;  
    }
    .box{
        
       
        display: flex;  
        flex-direction: column;
        align-items: center;
        /*justify-items: center;*/      
        justify-content: center;
    }
    .box button{
        width: 300px;
        
        display: inline-block;
        margin-top:30px;
        background-color:  #4CAF50;
        border: none;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        display: block;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
        border-radius: 5px;
        
        

    }
    
    

    .button a {
      color: white;
      text-decoration: none;
    }

    .button:hover {
      background-color:  #5a43;
    }

</style>
<body>
    

    <div class="header">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #ffd55a; height:13VH;" >
          <div class="container-fluid">
          <h2>SISTEMA ALUNO</h2>
              <a class="navbar-brand" href="../index.html">Página Principal</a>
          </div>
    </nav>
    </div>
    <div class="conteiner">

    <div class="box">
        <button class="button"><a href="cadaluno.php">CADASTRAR</a></button>
        <button class="button"><a href="listaalunos.php">LISTA</a></button>
        </div>
        
       
    </div>


    </div>
    
    

    
  

</body>
</html>