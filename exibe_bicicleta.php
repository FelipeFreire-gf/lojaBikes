<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exibir Bicicletas</title>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="text-center">

    <!--MENU-->
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #082b4d;">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Olá

                            <?php include "valida_login.php"; ?></a>

                    </li>

                    <li><a class="nav-link active" aria-current="page" href="logout.php">Sair</a></li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="div_mae">
        <?php
        $conectar = mysqli_connect("localhost", "root", "", "db_bike");

        $sql_consulta = "SELECT idBICICLETAS, TIPO_BIKE, MARCA_BIKE, MODELO_BIKE, COR_BIKE, RODA_BIKE, 
            GRUPO_BIKE, QUADRO_BIKE, GUIDAO_BIKE, FREIO_BIKE, SELIM_BIKE, PEDAL_BIKE, 
            PESO_BIKE, FOTO_BIKE, PRECO_BIKE FROM BICICLETAS WHERE idBICICLETAS = '$registro'";
        $resultado_consulta = mysqli_query($conectar, $sql_consulta);

        while ($registro = mysqli_fetch_row($resultado_consulta)) {
        ?>

            <div class="img_bike">
                <img src="img/1-float-sport-21-preto.jpg" alt="" width="100%" height="100%">
            </div>

            <div class="div_texto">
                <p class="description">
                    Descrição de comunicação entre a gerencia e os vendedores (desconto máximo, formas de pagamento, brindes....)
                    etc etc etc lorem ipsum ipsolon lorem loira louro lauro liro biro
                </p>
            </div>

    </div>
    <div class="mae_tabela">
        <!--TABELA ESQUERDA-->
        <table class="tabela">
            <tr>
                <td>
                    <p><strong>Preço</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[14]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Marca</strong></p>

                </td>
                <td>
                    <p><?php echo $registro[2]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Modelo</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[3]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Quadro</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[7]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Aros e Pneus</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[5]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Grupo</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[6]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Guidão</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[8]; ?></p>
                </td>
            </tr>
        </table>
        <!--FIM TABELA ESQUERDA-->

        <!--TABELA DIREITA-->
        <table class="tabela">
            <tr>
                <td>
                    <p><strong>Freios</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[9]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Selim</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[10]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Pedal</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[11]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Peso</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[12]; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Cor</strong></p>
                </td>
                <td>
                    <p><?php echo $registro[4]; ?></p>
                </td>
            </tr>
        </table>
        <!--FIM TABELA DIREITA-->
    </div>

    <td class="">
        <p>
            <a href="altera_bicicleta.php?codigo=<?php echo $registro[0] ?>">Alterar </a>
        </p>
    </td>

<?php
        }
?>

<!--RODA PÉ-->
<section class="rodape">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #082b4d;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section class="">
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">3ºD</span>
                </p>
            </section>
            <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">Escola Técnica de Brasília</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
</body>

</html>