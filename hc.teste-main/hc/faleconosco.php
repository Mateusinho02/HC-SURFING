<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Coast Surfing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="faleconosco.css">
    <!-- Google Icons Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
