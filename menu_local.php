<?php
if ($_SESSION["funcao_fun"] == "administrador") {
?>
    <?php
    /*
    teste

        <li><a href="administracao.php" class="active">Administração</a></li>
        <li><a href="lista_funcionarios.php" class="active">Funcionários</a></li>
        <li><a href="lista_bicicletas.php">Bicicletas</a></li>
        <li><a href="vendas.php">Vendas</a></li>
        <li><a href="relatorios.php">Relatorios</a></li>
            
    */
    ?>
    <div class="painel_adm">
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="administracao.php"> Administração </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="lista_funcionarios.php"> Funcionários </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="lista_bicicletas.php"> Bicicletas </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="vendas.php"> vendas </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="relatorios.php"> Relatórios </a></button>
    </div>
<?php
} elseif ($_SESSION["funcao_fun"] == "estoquista") {
?>

    <div class="painel_adm">
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="administracao.php"> Administração </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="lista_bicicletas.php"> Bicicletas </a></button>
    </div>
<?php
} elseif ($_SESSION["funcao_fun"] == "vendedor") {
?>
    <div class="painel_adm">
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="administracao.php"> Administração </a></button>  
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="vendas.php"> vendas </a></button>
    </div>
<?php
}
?>