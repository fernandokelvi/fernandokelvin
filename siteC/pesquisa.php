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
            width: %;
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
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>pesquisa</title>
        </head>
        <body>
            <?php 
             
             $pesquisa = $_POST['busca'] ?? '';
            
             include "conexao.php";

             $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

             $dados = mysqli_query($conn, $sql);

             ?>


            <div class="container">
                <div class="row">
                    <div class="col">
                            <h1>pesquisa</h1>
                            <nav class="navbar navbar-light bg-light">
                                <form class="form-inline" aciton="pesquisa.php" method="POST">
                                <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                   </form>
                                 </nav>

                          <table class="table table-hover">
                                 <thead>
                                 <tr>
                                 <div>
                                 <th scope="col">nome</th>
                                 <th scope="col">sobrenome</th>
                                 <th scope="col">Data de Nascimento</th>
                                 <th scope="col">E-mail</th>
                                 <th scope="col">Telefone</th>
                                 <th scope="col">CPF</th>
                                 <th scope="col">Funções</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 
                                 <?php 

                                 while ($linha = mysqli_fetch_assoc($dados) ) {
                                 $cod_possoa = $linha['nome'];
                                 $nome = $linha['nome'];
                                 $sobrenome = $linha['nome'];
                                 $data_nasc = $linha['nome'];
                                 $email = $linha['nome'];
                                 $Telefone = $linha['nome'];
                                 $CPF = $linha['nome'];
                                 $data_nasc = mostra_data($data_nasc);

                                  echo "<tr>
                                        <th scope='row'>$nome</th>
                                        <td>$nome</td>
                                        <td>$sobrenome</td>
                                        <td>$data_nasc</td>
                                        <td>$email</td>
                                        <td>$Telefone</td>
                                        <td>$CPF</td>
                                        <td>
                                         width=150px>
                                         <a href='cadastro_edit.php?id=$cod_pessoa' class= btn btn-success btn-sm'>Editar</a>
                                         <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
                                         </td>

                                         </tr>";
                                 }

                                 ?>
                                 </tbody>
                                 </table>

        <a href ="index.php" class="btn btn-info">Voltar para o início</a>
    </div>
</body>
</html>