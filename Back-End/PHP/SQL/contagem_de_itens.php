<?php

$conn = mysqli_connect('localhost', 'root', '', 'erp');

$sql = "SELECT produto, COUNT(produto) as qtd FROM mov_venda GROUP BY produto HAVING COUNT(produto) > 1";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo $row['qtd'] . ' - ' . $row['produto'] . '<br>';
    }
}

/*
    Count() conta a quantidade de repetição do item
    Count() as qtd, qtd e usado para mostrar os valores da soma
    Group by, mostra os itens agrupados
    Having, mostra os itens maior que tal valor
*/