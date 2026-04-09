<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "ETEC - Home"; ?></title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <header>
        <section class="logo">
            <img class="img" src="../imagens/cps-removebg-preview.png">
        </section>
        <ul class="ul1">
            <li class="li-1"><strong><a class="a1" href="index.php"><?php echo "Início"; ?></a></strong></li>
            <li class="li-1"><strong><a class="a1" href="cursos.php"><?php echo "Cursos"; ?></a></strong></li>
            <li class="li-1"><strong><a class="a1" href="contato.php"><?php echo "Contato"; ?></a></strong></li>
            <li class="li-1"><strong><a class="a1" href="sobre.php"><?php echo "Sobre"; ?></a></strong></li>
        </ul>
    </header>

    <div class="bloco-1">
        <div class="blocopreto">
            <img src="../imagens/image SP ULTRA-HD.jpg" class="sp">
        </div>
        <h1 class="titulo"><?php echo "Matricule-se na ETEC"; ?></h1>
        <h2 class="subtitulo"><?php echo "A melhor escola técnica estadual de São Paulo"; ?></h2>

        <button class="btn1"><a class="Entrar" href="entrar.php"><?php echo "Entrar"; ?></a></button>
        <button class="btn2"><a class="Cadastrar" href="cadastrar.php"><?php echo "Cadastrar"; ?></a></button>
    </div>

    <div class="bloco-2"></div>

    <footer>
        <div class="divf">
            <img class="imgf" src="../imagens/cps-removebg-preview.png">
            <hr>
            <p class="centrop"><?php echo "Centro Paula Souza"; ?></p>
            <br>
            <p class="centrop"><?php echo "Telefone : 99999-9999"; ?></p>
            <br>
            <p class="centrop"><?php echo "Endereço: Rua Gil Goiaba"; ?></p>
        </div>
    </footer>
</body>
</html>
