<!DOCTYPE html>
<html lang="pt-br">
<head>

        <!-- ICONES  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="shortcut icon" href="img/iconlogo.png">
    <link rel="stylesheet" href="form.css">
    <script src="main.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgrAmar | Contato</title>
</head>
<body>

    <header class="header">
            
        <img class="logo" src="img/logo.png" alt="">


    <nav class="navbar">

      <a href="index.html"> //Contato</a>
      <a href="index.html"> //Conteúdos </a>
      <a href="index.html"> //WorkShop </a>
        
</nav>

<button id="btn-menu" onclick="animar()">
    <span class="linha"></span>
    <span class="linha"></span>
    <span class="linha"></span>
</button>

<!-- MOBILE -->

<div class="menu-mobile" id="menu-mobile">

<nav class="navbar-mobile">

        <a href="#contato"> //Contato</a>
        <a href="#conteudos"> //Conteúdos </a>
        <a href="#workshop"> //WorkShop </a>

</nav>
</div>
</div>

</header>
<!-- 
    <!-- FORMULARIO CLIENTES -->
    <div class="titulo-form">
        <h2> Entre em Contato preenchendo abaixo </h2>
    </div>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdprogramar";

//criar conexão

    $conn = new mysqli($servername, $username, $password, $dbname);

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $mensagem = $_POST["mensagem"];

        $sql = "INSERT INTO informacao(nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";



        if($conn->query($sql) === true){
          echo "<p class='mensagemphp'>Mensagem enviada com sucesso</p>";
        } else{
          echo "Erro" . $sql . "<br>" . $conn->error;
        }
        
      }
      
    $conn->close();
      
?>



    <section class="modulo content">
        <section class="home" id="user">
        <div class="wrapper-login">
           <form action="" method="post">
    
            <div class="input-group">
            <div class="input-box">
                    <span class="icon"> <i class="fa-regular fa-user"></i></span>
                    <p> Nome:</p> <input type="text" name="nome" id="" required autocomplete="off">
                
                </div>
    
                <div class="input-box">
                    <span class="icon"> <i class="fa-solid fa-envelope"></i></span>
                    <p>E-mail:</p>  <input type="email" name="email" id=""requered autocomplete="off">
                </div>
    
                <div class="input-box">
                    <span class="icon"> <i class="fa-solid fa-phone"></i></span>
                    <p>Telefone:</p> <input type="decimal"  name="telefone" id="" requered autocomplete="off">

                </div>

               
                <div class="input-box">
                    <span class="icon"><i class="fa-regular fa-comment-dots"></i></span>
                    <p>Envie sua Pergunta:</p> 
                   <div class="quadro"><input type="text" name="mensagem" id="" placeholder="Insira sua pergunta"></div> 


                </div>
               

                <div class="btn-card">
                <input type="submit" value="Cadastrar" class="btn-card">
                 </div>
            </form> 
        </div>
    </div>
    </div>
    </section>
    </section>
    
<!-- FOOTER -->

<footer>
        <div class="desenvolvedores">

            <h3>Desenvolvedores</h3>

            <div class="devs">
                <!-- EDU -->
                <a href="https://www.linkedin.com/in/eduarda-souza-3157942b0/" target="_blank" class="fotoLink"><img src="img/fotoeduarda.png" alt=""></a>
                <!-- NATH -->
                <a href="https://www.linkedin.com/in/nathaliadominguesfreitas/" target="_blank" class="fotoLink"><img src="img/fotonathalia.png" alt=""></a>
                <!-- MARIANA -->
                <a href="https://www.linkedin.com/in/marianarodriguesprofissional/" target="_blank" class="fotoLink"><img src="img/fotomariana.png" alt=""></a>
                <!-- TAYLAN -->
                <a href="https://www.linkedin.com/in/taylanhahn/" target="_blank" class="fotoLink"><img src="img/fototaylan.png" alt=""></a>
                <!-- MARIANE -->
                <a href="https://www.linkedin.com/in/mariane-martins-b5372b287/" target="_blank" class="fotoLink"><img src="img/fotomariane.png" alt=""></a>
                <!-- MICHELE -->
                <a href="https://www.linkedin.com/in/michele-jeske-6772482b3/" target="_blank" class="fotoLink"><img src="img/fotomichele.png" alt=""></a>
            </div>
        </div>

        <a href="index.html"><img class="logofooter" src="img/programar.png" alt=""></a>
        <div class="contato">
            <h3>Redes Sociais</h3>
            <div class="insta">
                <a href="https://www.instagram.com/programar.code/" target="_blank"><img class="imgInsta"
                        src="imgfooter/iconeinsta.png" alt=""></a>
                <p>programar<span>.code</span></p>
            </div>
            <div class="email">
                <img class="imgEmail" src="imgfooter/iconeemail.png" alt="">
                <p>programar863<span>@gmail.com</span></p>
            </div>
        </div>
    </footer>
  
    
</body>
</html>