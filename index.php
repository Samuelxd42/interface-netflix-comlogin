<?php

if (!$_COOKIE["loginToken"]) {
    header("Location: login.php");
    exit;
}

include('listaFilmes.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reponsive.css">

    <!-- Owl css -->

    <link rel="stylesheet" href="css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Netflix Clone</title>
</head>

<body>

    <header>
        <div class="container">

            <h2 class="logo">Samflix </h2>

            <nav>
                <a href="#populares">Populares</a>
                <a href="#mais-avaliados">Mais Bem Avaliados</a>
                <a href="#series">Séries</a>
                <a class="sair-login" href="login.php">Sair</a>
            </nav>

        </div>
    </header>

    <main>
        <div class="filme-principal">

            <div class="container">
                <h3 class="titulo">Breaking Bad</h3>
                <p class="descricao">
                    Ao saber que tem câncer, um professor passa a fabricar metanfetamina pelo futuro da família, mudando o destino de todos.
                </p>
            </div>

            <div class="botoes">
                <button class="btn" role="button">
                    <i class="fas fa-play"></i>
                    Assistir Agora
                </button>
                <button class="btn" role="button">
                    <i class="fas fa-info-circle"></i>
                    Mais informações
                </button>
            </div>

        </div>
    </main>

    <div class="carrosel-filmes">

        <h2 class="h2-populares" id="populares">Populares</h2>

        <div class="owl-carousel owl-theme">
            <?php

            foreach ($listaPopulares as $filme) : ?>

                <div class="item">
                    <img class="box-filme" src="<?php echo $filme ?>" alt="">
                </div>

            <?php endforeach; ?>

        </div>

    </div>


    <div class="carrosel-filmes">

        <h2 class="h2-populares " id="mais-avaliados">Mais Bem Avaliados</h2>

        <div class="owl-carousel owl-theme">
            <?php

            foreach ($listaMaisBemAvaliados as $filme) : ?>

                <div class="item">
                    <img class="box-filme" src="<?php echo $filme ?>" alt="">
                </div>

            <?php endforeach; ?>

        </div>

    </div>

    <div class="carrosel-filmes">

        <h2 class="h2-populares" id="series">Séries de Renome</h2>

        <div class="owl-carousel owl-theme">
            <?php

            foreach ($listaSeries as $filme) : ?>

                <div class="item">
                    <img class="box-filme" src="<?php echo $filme ?>" alt="">
                </div>

            <?php endforeach; ?>

        </div>

    </div>

    <footer>
        <div>
            <a href="https://www.linkedin.com/in/samuel-fernandes-400587182/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
            <a href="https://github.com/Samuelxd42" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        </div>
        <h2 class="text-footer">Copyright © 2021 - <a class="desco" href="https://www.instagram.com/samueloliveira1b/" target="_blank">Samuel Fernandes</a></h2>
    </footer>


</body>

<script src="js/owl/jquery.min.js"></script>
<script src="js/owl/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script src="js/main.js"></script>

</html>