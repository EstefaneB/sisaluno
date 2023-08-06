<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');
##cadastrar
if (isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $endereco = $_GET["endereco"];
        $datanascimento = $_GET["datanascimento"];
        $estatus = $_GET["estatus"];
        $cpf = $_GET["cpf"];
       echo "$nome";

        ##codigo SQL
         $sql = "INSERT INTO professor(nome,idade,endereco,datanascimento,estatus,cpf) 
                VALUES('$nome','$idade','$endereco','$datanascimento','$estatus','$cpf')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $id = $_POST["id"];
    $endereco = $_POST["endereco"];
    $datanascimento = $_POST["datanascimento"];
    $estatus = $_POST["estatus"];
    
   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, idade= :idade, endereco= :endereco,
     datanascimento= :datanascimento, estatus= :estatus WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_BOOL);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
        }

}

        
?>
