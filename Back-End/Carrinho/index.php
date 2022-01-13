<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>


    <style>
        *{margin: 0; padding: 0; border: 0; box-sizing: border-box; text-decoration: none;}
        h2.title{
            background-color: #069;
            width: 100%;
            padding: 20px;
            text-align: center;
            color: white;
        }

        .carrinho-container{
            display: flex;
            margin-top: 10px;
        }

        .produto{
            width: 33.3%;
            padding: 0 30px;
        }

        .produto img{
            max-width: 100%;
        }

        .produto a{
            display: block;
            width: 100%;
            padding: 10px;
            color: white;
            background-color: #5fb382;
            text-align: center;
        }

        .carrinho-item{
            max-width: 1200px;
            margin: 10px auto;
            padding-bottom: 10px;

            border-bottom: 2px dotted #ccc;

        }

        .carrinho-item p{
            font-size: 19px;
            color: black;
        }
    </style>

</head>
<body>

    <h2 class="title">Carrinho PHP</h2>
    <div class="carrinho-container">

<?php
    $items = array(
        ['nome' => 'cadeira', 'imagem' => 'img/item1.jpg', 'preco' => '200'],
        ['nome' => 'copo', 'imagem' => 'img/item2.jpg', 'preco' => '100'],
        ['nome' => 'mesa', 'imagem' => 'img/item3.jpeg', 'preco' => '400']);

    foreach($items as $key => $value){
?>
    <div class="produto">

        <img src="<?php echo $value['imagem'] ?>"/>
        <a href="?adicionar=<?php echo $key ?>">Adicionar ao carricho</a>

    </div>
<?php
    }
?>

    </div> <!--Carrinho container-->

    <?php

    if(isset($_GET['adicionar'])){
        // vamos adicionar ao carrinho
        $idProduto = (int) $_GET['adicionar'];

        if(isset($items[$idProduto])){

            if(isset($_SESSION['carrinho'][$idProduto])){
                $_SESSION['carrinho'][$idProduto]['quantidade']++;
            }else{
                $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $items[$idProduto]['nome'], 'preco' => $items[$idProduto]['preco']);
            }

            echo '<script>alert("O item foi adicionado ao carrinho")</script>';

        }else{
            die('Você não pode adicionar um item que não existe.');
        }
    }

    ?>

    <h2 class="title">carrinho</h2>
    <?php include "carrinho.php" ?>
</body>
</html>