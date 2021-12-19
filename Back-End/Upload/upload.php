<?php
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "banco_teste");

    if($db == true){
        echo "conectado com sucesso";
    }else{
        echo "error: <br>" . $conn -> eror;
    }

    $msg = false;

    if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //Capta a extensão do arquivo
        $novo_nome = md5(time()). $extensao; // Muda o nome do arquivo
        $diretorio = "upload/"; // DIretorio onde será salvo o arquivo

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); // Vai mover o arquivo para o diretorio

        $sql_code = "INSERT INTO arquivo (arquivo, data) VALUE ('$novo_nome', NOW())"; // Now capta a hora e data do PC
        if(mysqli_query($conn, $sql_code)){
            $msg = "Arquivo enviado com sucesso!";
        }else{
            $msg = "Falha ao enviar arquivo";
        }

    }
?>

<h1>Upload</h1>
<?php if($msg != false) echo "<p> $msg </p>"; ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo" required>
    <input type="submit" value="salvar">
</form>

<?php
    $select = "SELECT * FROM arquivo";
    $query = mysqli_query($conn, $select);

    if($query == true){
        while($img = $query -> fetch_assoc()){
            ?>

            <img src="upload/<?php echo $img['arquivo'] ?>">

            <?php
        }
    }
?>