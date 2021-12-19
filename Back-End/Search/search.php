<?php

    $search = isset($_GET['search']) ? $_GET['search'] : "";
    $search = trim($search); // Retira os espaços em branco

    $select = "SELECT * FROM posts WHERE tags LIKE '%$search%' OR title LIKE '%$search%' OR category LIKE '%$search%'";
    // Like por palavras no meio dos dados
    $query = mysqli_query($conn, $select);

    if ($query -> num_rows > 0) {
        while ($row = $query -> fetch_assoc()) {

?>

<!-- Código HTML -->

<?php
        }
    }
?>