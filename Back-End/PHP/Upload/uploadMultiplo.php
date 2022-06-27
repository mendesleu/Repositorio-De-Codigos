<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple>
    <button>enviar</button>
</form>

<?php

$array = $_FILES['arquivo']['name'];

for ($i = 0; $i < count($array); $i++) {
    echo $i;
    echo $array[$i] . '<br>';

    if (isset($_FILES['arquivo']['name'][$i])) {

        $extensao = strtolower(substr($_FILES["arquivo"]['name'][$i], -5)); //Capta a extensão do arquivo
        $novo_nome = md5(time()) . $extensao; // Muda o nome do arquivo
        $diretorio = "upload/"; // Diretorio onde será salvo o arquivo

        move_uploaded_file($_FILES["arquivo"]["tmp_name"][$i], $diretorio . $novo_nome); // Vai mover o arquivo para o diretorio

    }   
}
