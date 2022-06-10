<?php
if ($_SESSION["FUNCAO_FUNCIONARIO"] == "administrador") {
?>
    <?php
    ?>
    <div class="painel_adm">
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="administracao.php"> Administração </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="lista_funcionarios.php"> Funcionários </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="lista_bicicletas.php"> Bicicletas </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="vendas.php"> Vendas </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="relatorios.php"> Relatórios </a></button>
    </div>
<?php
} elseif ($_SESSION["FUNCAO_FUNCIONARIO"] == "estoquista") {
?>

    <div class="painel_adm">
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="administracao.php"> Administração </a></button>
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="lista_bicicletas.php"> Bicicletas </a></button>
    </div>
<?php
} elseif ($_SESSION["FUNCAO_FUNCIONARIO"] == "vendedor") {
?>
    <div class="painel_adm">
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="administracao.php"> Administração </a></button>  
        <button type="submit" class="btn btn-outline-light btn-rounded" style="background-color: #bebebe;"><a href="vendas.php"> Vendas </a></button>
    </div>
<?php
}
?>