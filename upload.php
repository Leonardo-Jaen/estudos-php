<?php

$target_dir = "uploads/";
$target_files = $target_dir . basename($_FILES['fileToUpload'] ['name']);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_files, PATHINGINFO_EXTENSION));

if(isset($_POST['submit'])){
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if($check !== false ) {
        echo "O arquivo é uma imagem -" . $check['mime'] . ".<br /> ";
    } else {
        echo "O arquivo não é uma imagem";
        $uploadOk = 0;
    }
}

if(file_exists($target_files)) {
    echo "Desculpe, o arquivo ja existe";
    $uploadOk = 0;
    
}

if($_FILES['fileToUpload'] ['size'] > 500000) {
    echo "Desculpa, seu arquivo está muito grande";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "Desculpe, apenas arquivos jpg, png, jpeg e gif são permitidos";
    $uploadOk = 0;
}

if($uploadOk === 0) {
    echo "Desculpe, o seu arquivo não foi enviado para o servidor";
} else {
    if(!file_exists("uploads")){
        mkdir('uploads', 0777, true);
    }
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_files)) {
        echo "O arquivo" . basename($_FILES['fileToUpload']['name']) . "foi enviado com sucesso";
    } else {
        echo "Desculpe, houve um erro ao enviar o seu arquivo para o servidor";
    }

}
