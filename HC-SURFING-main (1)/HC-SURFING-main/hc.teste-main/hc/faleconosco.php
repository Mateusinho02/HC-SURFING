<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hot Coast Surfing</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- Google Icons Link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
</head>
<body>
  <?php
    session_start();
  ?>
  <!-- Header or Navbar -->
  <header class="header">
      <nav class="navbar max-width">
        <a href="index.php" class="logo">Hot Coast Surfing</a>
        <ul class="links">
          <li><a href="faleconosco.php">Fale conosco</a></li>
          <li><a href="sobre.php">Sobre Nós</a></li>
          <li class="language">
            <a href="#"></a>  
            <span class="material-symbols-outlined"></span>          
          </li>
          <!-- ... -->
<!-- ... -->
<?php 
  if (isset($_SESSION['idUsuario'])) {
    echo "<li><a href='agendamentorole.php'>Agendamento Rolê</a></li>";
    echo "<li class='dropdown'>
            <a href='javascript:void(0);' class='dropbtn'>Bem-vindo, " . $_SESSION['nomeUsuario'] . "</a>
            <div class='dropdown-content'>
              <a href='sair.php'><i class='material-icons-outlined'>logout</i> Sair</a>
            </div>
          </li>"; // Exibindo o dropdown com informações do usuário e o link de SAIR
  } else {
    echo "<li><a href='cadastro.php'>Agendamento Rolê</a></li>";
    echo "<li class='btn signin'><a href='cadastro.php'>Cadastro</a></li>";
    echo "<li class='btn join'><a href='login.php'>Login</a></li>";
  }
?>
<!-- ... -->

<!-- ... -->

        </ul>
      </nav>
    </header>
  <section id="contact">
    <div class="wrapper">
      <div class="col-a">
        <h2>Fale Conosco!</h2>
        <div class="content">
          <!-- ... -->
          <ul>
            <li>
              <a href="mailto:mateus_mariano@estudante.sesisenai.org.br" title="Enviar e-mail">
                <i class="fas fa-envelope contact-icon"></i>
                mateus_mariano@estudante.sesisenai.org.br
              </a>
            </li>
            <li>
              <a href="tel:+55 047 99916-5879" title="Fazer ligação">
                <i class="fas fa-phone contact-icon"></i>
                +55 047 99916-5879
              </a>
            </li>
          </ul>
          <!-- ... -->

          <a
            class="button"
            title="Me chama no zap!"
            href="https://wa.me/5555999165879?text=Salvee%21%21"
            target="_blank"
          >
            <i class="fab fa-whatsapp"></i>
            WhatsApp
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ... -->
</body>
</html>
