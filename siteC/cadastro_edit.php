<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
     
    <script type="text/javascript">
    $("#telefone, #celular").mask("(00) 0000-0000");
    </script>

   <script type="text/javascript">
 
function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}
   </script>



    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }


    </style>
</head>
<body>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1, shrink-to-fit=no">

        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossrigin="anonymous">


        </head>
        <body>

         <?php

         include "conexao.php"
         $id = $_GET['id'] ?? '';
         $sqli = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

         $dados = mysqli_query($conn, $sql);
         $linha = mysql_fetch_assoc($dados);
         ?>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="box">
        <form action="edit_script.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de contatos</b></legend>
                <br>
                <div class="inputBox">    
                    <input type="text" name="nome" id="nome" class="inputUser" required value=" <?php echo $linha['nome']; ?>">
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required value=" <?php echo $linha['sobrenome']; ?>">
                    <label for="Sobrenome" class="labelInput">sobrenome</label>
                </div>
                <br><br>
                <label for="data_nasc"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required value=" <?php echo $linha['data_nasc']; ?>">
                <br><br><br> 
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required value=" <?php echo $linha['email']; ?>">
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required value=" <?php echo $linha['telefonee']; ?>">
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                <input type="text" oninput="mascara(this)"  name="CPF" id="CPF" class="inputUser" required value=" <?php echo $linha['CPF']; ?>">
                <label for="CPf" class="labelInput">CPF</label>
                <br>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']">
                </fieldset>
        </form>
        <a href ="index.php" class="btn btn-info">Voltar para o início</a>
    </div>
</body>
</html>