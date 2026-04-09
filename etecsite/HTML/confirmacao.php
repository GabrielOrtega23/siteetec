<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/cursos.css">
    <title>Dados Cadastrados</title>
</head>
<body>
    <header>
        <section class="logo">
            <img class="img" src="../imagens/cps-removebg-preview.png">
        </section>
         <ul class="ul1">
           <ul class="ul1">
              <li class="li-1"><strong><a class="a1" href="../index.php"><?php echo "Início"; ?></a></strong></li>
            <li class="li-1"><strong><a class="a1" href="cursos.php"><?php echo "Cursos"; ?></a></strong></li>
              <li 
            class="li-1"><strong><a class="a1" href="#"><?php echo "Etec"; ?></a></strong>
           </li>
            <li
             class="li-1"><strong><a class="a1" href="#"><?php echo "Fatec"; ?></a></strong>
            </li>
            <li class="li-1"><strong><a class="a1" href="contato.php"><?php echo "Contato"; ?></a></strong></li>
            <li class="li-1"><strong><a class="a1" href="sobre.php"><?php echo "Sobre"; ?></a></strong></li>
        </ul>
            </li>
        </ul>
    </header>

    <div class="bloco-1">
        <div class="blocopreto">
            <img src="../imagens/image SP ULTRA-HD.jpg" class="sp">
        </div>
    </div>

    <div class="overlay-contato">
        <div class="caixa-contato">
            <h2>Perfil Criado</h2>
            
            <?php
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
            ?>
            
            <div style="background-color: #ebebeb; padding: 20px; border-radius: 4px; text-align: left; margin-bottom: 20px;">
                <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                <p><strong>E-mail:</strong> <?php echo $email; ?></p>
                <p><strong>Senha:</strong> <?php echo $senha; ?></p>
            </div>

            <div class="centralizar-btn">
                <a href="../index.php" class="btn-enviar">Ir para Início</a>
            </div>
        </div>
    </div>

</body>
</html>