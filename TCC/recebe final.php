<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>RESULTADO</h1>

  <?php
      $titulo = $_POST["titulo"];
      $dica = $_POST["dica"];

      if(empty($email) || (empty($dica)))
      {
        echo "<p> ALGUM CAMPO ESTÁ VAZIO!</p>";
      }
      else{
        $host = "localhost";
        $usuario = "root";
        $senhaBD = "";
        $bancoDeDados = "dica";

        $conexao = mysqli_connect($host, $usuario, $senhaBD, $bancoDeDados) or die("BANCO DE DADOS NÃO CONECTADO!");

        echo "CONEXÃO ESTABELECIDA COM SUCESSO!";

        $query = "INSERT INTO DICA ('ID','TITULO','DESCRIÇÃO','RANKING') VALUES ('','$titulo','$dica','0')";
        $resultado = mysqli_query($conexao, $query) or die("A INFORMAÇÃO NÃO FOI INSERIDA");

        echo "DICA INSERIDA COM SUCESSO!";
      }
   ?>
   <a href="Final.php">VOLTAR</a>
</body>
</html>