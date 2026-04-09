<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/cursos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title><?php echo "Sobre - ETEC"; ?></title>
</head>
<body>
    <header>
        <section class="logo">
            <img class="img" src="../imagens/cps-removebg-preview.png">
        </section>
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
    </header>

    <div class="bloco-1">
        <div class="blocopreto">
            <img src="../imagens/image SP ULTRA-HD.jpg" class="sp">
        </div>
        <h1 class="titulo"><?php echo "Sobre o CPS"; ?></h1>
    </div>

    <div class="bloco-2" style="padding: 100px 20px;">
        <div class="container-cursos">
            
            <div class="card" style="min-height: auto;">

                <div class="card-content">

                    <i class="fa-solid fa-graduation-cap" style="font-size: 40px; color: rgb(146, 20, 20); margin-bottom: 20px;"></i>

                    <h3>O que é a ETEC?</h3>
                    <p style="text-align: justify;">As <strong>Escolas Técnicas Estaduais (Etecs)</strong> são instituições de ensino mantidas pelo Centro Paula Souza. Elas oferecem Ensino Médio, Cursos Técnicos e o Ensino Médio Integrado ao Técnico (M-Tec).</p>
                    <p style="text-align: justify; margin-top: 10px;">O foco principal é a formação profissional para o mercado de trabalho, com cursos em diversas áreas como tecnologia, saúde, gestão e artes, sendo reconhecidas pela alta qualidade de ensino e gratuidade.</p>
                </div>
            </div>

            <div class="card" style="min-height: auto;">

                <div class="card-content">

                    <i class="fa-solid fa-university" style="font-size: 40px; color: rgb(146, 20, 20); margin-bottom: 20px;"></i>
                    <h3>O que é a FATEC?</h3>
                    <p style="text-align: justify;">As <strong>Faculdades de Tecnologia do Estado de São Paulo (Fatecs)</strong> são instituições públicas de ensino superior. Diferente de uma universidade comum, a Fatec foca na graduação de Tecnólogos.</p>
                    <p style="text-align: justify; margin-top: 10px;">Os cursos superiores de tecnologia são focados em áreas estratégicas para o desenvolvimento econômico, formando profissionais altamente qualificados em um tempo mais curto (em média 3 anos), com foco prático e imediato.</p>
                </div>
            </div>

            <div class="card" style="min-height: auto;">

                <div class="card-content">
                    
                    <i class="fa-solid fa-building-columns" style="font-size: 40px; color: rgb(146, 20, 20); margin-bottom: 20px;"></i>
                    <h3>Centro Paula Souza</h3>
                    <p style="text-align: justify;">O <strong>Centro Paula Souza (CPS)</strong> é a autarquia do Governo do Estado de São Paulo que administra todas as Etecs e Fatecs. É a maior rede de educação profissional da América Latina.</p>
                    <p style="text-align: justify; margin-top: 10px;">Seu objetivo é promover o desenvolvimento econômico e social através da educação tecnológica pública de excelência, presente em mais de 300 cidades paulistas.</p>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="divf">
            <img class="imgf" src="../imagens/cps-removebg-preview.png">
            <hr>
            <p class="centrop"><?php echo "Centro Paula Souza"; ?></p>
        </div>
    </footer>
</body>
</html>