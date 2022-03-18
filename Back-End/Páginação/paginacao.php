<?php

// Faz a leitura da página
$pg = isset($_GET['pg']) ? $_GET['pg'] : "";

// Defini o máximo a ser exibido
$maximo = 5;

// Calcula o valor a ser exibido
$inicio = ($maximo * $pg) - $maximo;

$select = "SELECT * FROM tabela LIMIT $inicio, $maximo";
$query = mysqli_query($conn, $select);

if ($query->num_rows > 0) {
    while ($listar = $query->fetch_assoc()) {
        // Exibe os dados
    }
}

// Paginação

$selectPG = "SELECT id_produto FROM tabela";
$query = mysqli_query($conn, $selectPG);

if ($query->num_rows > 0) {

    // Retorna o total de registro da tabela
    $numTotal = mysqli_num_rows($query);

    // Calcula o total de pg a ser exibida
    $total = ceil($numTotal / $maximo); // O ceil arredonda o número

}

// Quantidade de blocos de pg a ser exibido
// Blocos dos números
$exibir = 1;

// Monta o link de proximo e anterior;
$anterior = (($pg - 1) == 0) ? 1 : $pg - 1;
$proximo = (($pg + 1) == 0) ? 1 : $pg + 1;
?>

<div style="display: flex;">
    <?php
    if ($pg > 1) {
    ?>
        <a href="?pg=<?= $anterior ?>">
            <div><strong><</strong>
            </div>
        </a>
    <?php
    }
    ?>

    <!-- Vai mostrar a página um sempre -->
    <a href="?pg=1">
        <div><strong>1</strong></div>
    </a>

    <?php
    for ($i = $pg - $exibir; $i <= $pg + 1; $i++) {
        // Limita entre a página dois e a pnultima
        if ($i > 1 && $i < $totalPG) {
    ?>
            <a href="?pg=<?= $i ?>">
                <div><strong><?= $i ?></strong></div>
            </a>
        <?php
        }
    }

    // Só vai mostrar se tiver mais de uma página
    if ($totalPG > 1) {
        ?>

        <!-- Vai mostrar sempre a ultima página -->
        <a href="?pg=<?= $totalPG ?>">
            <div><strong><?= $totalPG ?></strong></div>
        </a>

    <?php
    }
    if ($pg < $totalPG) {
    ?>
        <a href="?pg=<?= $proximo ?>">
            <div><strong>></strong></div>
        </a>
    <?php
    }
    ?>
</div>