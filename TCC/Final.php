<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="TFinal.css">
  <script src="TCC/scripts.js" type="text/javascript"> </script>
</head>

<body >
  <div id="menuu">
    <HR color="white" size=5 noshade id="inicio"><br>
  <header>
    <font align="center" color="white">
      <h1>
     SEM PLANOS PARA O FIM DE SEMANA?
      </h1>
    </font>
    <HR color="white" size=5 noshade id="inicio">
    </header>
  </div>
    <nav>
     
        <ul>
          <font color="white" face="arial">
            <li><a href="#inicio"> INICIO </a></li>
            <li><a href="#sobre"> SOBRE </a></li>
            <li><a href="#formulario"> FORMULARIO </a></li>
            <li><a href="#dicas"> DICAS </a></li>
            <li><a href="#conhece"> CONHECEU </a></li>
            <li><a href="#contato"> CONTATO </a></li>
          </font>
        </ul>
      </div>
    </nav>
    <HR color="white" size=5 noshade id="inicio">
      
      <font align="center" fonte="arial" color="white">
        <div id="inicioo">
    <nav>
      <h1>DICAS PARA O FIM DE SEMANA:</h1>
      <h2 align="center">
      <p>
        Sem ter o que fazer no final de semana? Aqui terá dicas de coisas para se fazer no fim de semana, seja sozinho ou com alguém.
      </p>
      <p>As vezes o desanimo nos tira a criatividade e vontade de fazer as coisas, e acaba passando o dia apenas "existindo".</p>
      <p>Então bora sair dessa procrastinação e VIVER! Segue ai algumas dicas.</p>
      </h2>
    </nav>
        </div>
      </font><br>

    <!-- BOTAO MODAL -->
    <font color="white">
    <HR color="white" size=5 noshade id="sobre">
      <div id="modall">
    <h1 align="center" face="Arial"> PARA MAIS INFORMAÇÕES</h1>
    <br><br>
  <button id="botao-modal" onclick="acaoModal()">ABRIR</button>
  <br><br>
  <div id="abrir-modal" class="modal">
    <a onclick="acaoModal()" title="fechar" class="fechar">X</a>
    <div id="conteudo-modal">
      <p>
        IDEIAS CRIATIVAS
      </p>
      <p>
        Aqui você encontra ideias para se divertir e distrair no fim de semana, mas não se limite e busque sempre novas ideias e soluções. Continuar a viver parado na procrastinação só proporciona mais desânimo. Acabam passando os dias e vamos passando por eles apenas "existindo". Então VIVA a VIDA intensamente!
      </p>
    </div>
  </div>
      </div>
    </font>
  
  
  
    <HR color="white" size=5 noshade id="formulario">
      <font color="white">
        <h1 align="center">FORMULÁRIO</h1>
  <div class="container">
    <form id="cadastro" action="recebe final.php" method="POST">
      <h1 align="center">CADASTRE SUA IDEIA:</h1>
      <div class="area-input">
        <input type="text" id="nome" name="Nome" placeholder="Nome" required/>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required/>
      </div>
      
      <div class="area-input dica">
        <input type="text" id="dica" name="dica" placeholder="Título da Dica" required/>
        <input type="text" id="descricao" name="descricao" placeholder="Descrição da Dica" required/>
      </div>
      <div class="area-email">
        <input type="email" id="email" name="email" placeholder="E-mail" required/>
      </div>
      <div class="area-do-botao">
        <button type="submit" id="botao-enviar">ENVIAR</button>
      </div>
    </form>
    <br>
    <br>
    <br>
    
    <!-- AQUI ENTRA O PHP -->
    
  </div>
      </font>
  
    <HR color="white" size=5 noshade id="dicas">
      <div id="dicaa">
  <font color="white">
    <h1 align="center">DICA 1</h1>
    <h2>Andar de Bicicleta.</h2>
    <img src="img/bicicleta.jpeg" alt="" width="400" heigth="150" class="" title="Andar de bicicleta.">
    <h1 align="center">DICA 2</h1>
    <h2>Cozinhar aquele prato favorito.</h2>
    <img src="img/cozinhar.jpeg" alt="" width="400" heigth="150" class="" title="Cozinhar">
    <h1 align="center">DICA 3</h1>
    <h2>Praticar a arte de desenho.</h2>
    <img src="img/desenhar.jpeg" alt="" width="400" heigth="150" class="" title="Desenhar">
    <h1 align="center">DICA 4</h1>
    <h2>Passear com o pet.</h2>
    <img src="img/dog.jpeg" alt="" width="400" heigth="150" class="" title="Curtir os dogs">
    <h1 align="center">DICA 5</h1>
    <h2>Praticar algum esporte.</h2>
    <img src="img/esportes.jpeg" alt="" width="400" heigth="150" class="" title="praticar esportes">
    <h1 align="center">DICA 6</h1>
    <h2>Ir ao shopping.</h2>
    <img src="img/shopi.jpeg" alt="" width="400" heigth="150" class="" title="shopping">
    <h1 align="center">DICA 7</h1>
    <h2>Tomar sorvete ou açaí.</h2>
    <img src="img/sorvete.jpeg" alt="" width="400" heigth="150" class="" title="sorvete">
    <h1 align="center">DICA 8</h1>
    <h2>Ir viajar para um lugar que goste.</h2>
    <img src="img/viajar.jpeg" alt="" width="400" heigth="150" class="" title="ir viajar">

  </font>
      </div>
  <br><br>
    <HR color="white" size=5 noshade id="conhece">
      <div id="conheceuu">
      <h1 align="center">
      <font color="white">
      <label> CONHECEU O SITE ATRAVÉS DE:</label>
      <select id="conheceuosalaoatravés">
        <option selected disabled value="">Selecione...</option>
      <option>Rede Social</option>
      <option>Indicação</option>
      <option>Compartilhamento</option>
      <option>Propaganda</option>
      </select>
      </font>
    
  <br><br>
  
      </h1>
      </div>
    <HR color="white" size=5 noshade id="contato">
      <br>
                <div id="contatoo">
      <h1 align="center">FORMULARIO DE CONTATO</h1>
        <br><br><br>
      <form>
        <font color="ffe3dc">
        
        <h2>
          <p>
            Nome: Camilly de Souza Duarte Arruda
          </p>
          <p>
            Tel: (22) 99999-1371
          </p>
          <p>
            Endereço: Rua Nilo Peçanha - Morro do Côco
          </p>
          <li><a href="mailto:camillysouzaduarte2811@gmail.com"> E-mail</a></li>
        </h2>

        </font>
        </form>
                </div>
      <h2>
        <ul>
          <font color="white">
            <li><a href="#inicio">TOPO</a></li>
            <li><a href="indextest.html">VOLTAR</a></li> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
          </font>
        </ul>
      </h2>
   

<font color="white">
      <?php
      
        $host = "localhost";
        $usuario = "root";
        $senhaBD = "";
        $bancoDeDados = "DICAS";

        $conexao = mysqli_connect($host, $usuario, $senhaBD, $bancoDeDados) or die("BANCO DE DADOS NÃO CONECTADO!");

        echo "CONEXÃO ESTABELECIDA COM SUCESSO!";

        $query = "SELECT * FROM DICA";
        $resultado = mysqli_query($conexao,$query) or die ("NÃO FOI POSSIVEL CONECTAR AO BD.");
    ?>

        <table>
          <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>RANKING</th>
          </tr>
          <?php
              while ($coluna = mysqli_fetch_array($resultado))
              {
                echo "<tr>";
                echo "<td>" . $coluna["TITULO"] . "</td>";
                echo "<td>" . $coluna["DESCRICAO"] . "</td>";
                echo "<td>" . $coluna["RANKING"] . "</td>";
              }
          ?>
              <td>
                <form  action="rankingFinal.php" method="get">
                  <input type="hidden" name="id" value="<?php echo $coluna["id"];?>">
                  <input type="hidden" name="ranking" value="<?php echo $coluna["RANKING"];?>">

                  <button type="submit" value="1" name="opcao">SIM</button>
                  <button type="submit" value="2" name="opcao">NÃO</button>
                </form>
              </td>
            <?php
              echo "</tr>";
            ?>
        </table>
        <a href="Final.php">VOLTAR</a>
</font>





</body>
</html>