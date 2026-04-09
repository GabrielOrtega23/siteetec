<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/cursos.css">
    <title><?php echo "Entrar - ETEC"; ?></title>
</head>
<body>
    <header>
        <section class="logo">
            <img class="img" src="../imagens/cps-removebg-preview.png">
        </section>
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
    </header>

    <div class="bloco-1">
        <div class="blocopreto">
            <img src="../imagens/image SP ULTRA-HD.jpg" class="sp">
        </div>
    </div>

    <div class="overlay-contato">
        <div class="caixa-contato">
            <h2><?php echo "Entrar"; ?></h2>
            <form action="validar_login.php" method="POST">
                <div class="campo">
                    <label><?php echo "E-mail"; ?></label>
                    <input type="email" name="email" placeholder="<?php echo "email@exemplo.com"; ?>" required>
                </div>
                <div class="campo">
                    <label><?php echo "Senha"; ?></label>
                    <input type="password" name="senha" placeholder="<?php echo "Sua senha"; ?>" required>
                </div>
                <div class="centralizar-btn">
                    <button type="submit" class="btn-enviar" style="border: none; cursor: pointer;"><?php echo "Acessar"; ?></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>