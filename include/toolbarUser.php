<?php
use src\session\Login;

$userLogado = Login::getUsuarioLogado();
$userItem = $userLogado  ? '<a href="logout.php" class"dropdown-item">'.$userLogado['nome'].',Sair</a> ' :
'<a class="dropdown-item"  href="login.php">  <img id="login"src="imagens/login.png" alt="login"> Login</a>';

?>
<header>
  <div class="container col-12" id="nav-container">
    <nav class="navbar navbar-expand-lg  navbar-dark  ">
      <a class="navbar-brand" href="index.php">
        <img id="logo" src="imagens/pngegg.png" alt="Viajandoo">
      </a>
      <!--Menu hamburguer-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
      aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" navbar-collapse collapse justify-content-end" id="navbar-links" >




<div class="navbar-nav">

      <ul class="nav justify-content-end" >
        <li class="nav-item dropdown " >

          <a class="nav-link dropdown-toggle  "  style="padding-right:0px" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img id="login"
            src="imagens/login.png" alt="login">
          </a>

          <div class="dropdown-menu dropdown-menu-right" style="background:  #460D7A; " aria-labelledby="navbarDropdownMenuLink">

            <?=$userItem?>
            <?=$userLogado?'<a class="dropdown-item" href="updateUser.php">Atualizar Usuario</a>':
            '<a class="dropdown-item" href="registerUser.php">Cadastrar Usuario</a>'?>
          </div>

        </li>

      </ul>
    </div>
</div>
  </nav>
</div>
</header>
