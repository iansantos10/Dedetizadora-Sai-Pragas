<?php
if(isset($_POST['submit']))
{
include_once('config.php');
$nome= $_POST['nome'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_servic = $_POST['data_servic'];
$servic = $_POST['servic'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];

$result = mysqli_query($conexao,  "INSERT INTO usuarios (nome,telefone, sexo, data_servic, servic, cidade, endereco)
VALUES ('$nome', '$telefone','$sexo','$data_servic','$servic','$cidade','$endereco')");

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/barata3 - Copia.jpeg" type="image/x-icon">
  <link rel="shortcut icon" href="img/barata3 - Copia.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/fontawesome.css" />
    <script src="js/fontawesome.js"></script>
    <script src="js/slide.js" defer></script>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="css/orça.css" />

    <title>Orçamento</title>
</head>
<body>
    <script>
      const toggle = () => {
        document.getElementById("nav").classList.toggle("navactive");
      };
    </script>
    <header>
      <div class="brand">
        <a href="inicio.html"><img src="img/barata3.jpeg" alt="Logo da Dedetizadora" id="logo"></a>
        <h1>Dedetizadora</h1>
      </div>
      <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
      <div class="navbar" id="nav">
        <ul>
          <li>
            <span class="fas fa-home" id="headIcon"></span>
            <a href="inicio.html"> Inicio </a>
          </li>
          <li>
            <span class="fa-solid fa-address-card" id="headIcon"></span>
            <a href="sobre.html"> Sobre </a>
          </li>
          <li>
            <span class="fa-solid fa-spray-can" id="headIcon"></span>
            <a href="serviços.html"> Serviços </a>
          </li>
          <li>
            <span class="fa-solid fa-money-check-dollar" id="headIcon"></span>
            <a href="Orçamento.php"> Orçamento </a>
          </li>
        </ul>
      </div>
    </header>
    <br>
    <br>
    <center>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/undraw_contact_us_re_4qqt.svg" alt="">
        </div>
        <div class="form">
            <form action="orçamento.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Orçamento</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Enviar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Telefone</label>
                        <input id="lastname" type="text" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" placeholder="Digite o nome da cidade" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Endereço</label>
                        <input id="number" type="tel" name="endereco" placeholder="Digite seu endereço" required>
                    </div>

                    <div class="input-box">
                        <label for="data_servico">Data do serviço</label>
                        <input type="date" name="data_servic" id="data_servico" required>
                    </div>


                    <div class="input-box">
                        <label for="servic">Tipo de serviço:</label>
                        <select id="servic" name="servic" required>
                            <option value="">Selecione um serviço</option>
                            <option value="Dedetização">Dedetização</option>
                            <option value="Desratização">Desratização</option>
                            <option value="Descupinização">Descupinização</option>
                            <option value="COntrole de Pombo">Controle de Pombo</option>
                        </select>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                        <input id="female" type="radio" name="genero" value="Feminino">
                        <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                        <input id="male" type="radio" name="genero" value="Masculino">
                        <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                        <input id="others" type="radio" name="genero" value="Outros">
                        <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                        <input id="none" type="radio" name="genero" value="Prefiro não dizer">
                        <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit" id="submit" name="submit" ><a>Enviar</button></a>
                    </div>
            </form>
        </div>
    </div>
</form>
</center>
</body>
</html>