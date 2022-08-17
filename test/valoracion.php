<?php

include_once "db.php";

// $photo = $_FILES['photo'];
// $nom_photo = $photo['name'];
// $tipo_photo = $photo['type'];
$name = $_POST['name'];
$comment = $_POST["comment"];
$estrellas = $_POST['estrellas'];

// var_dump($name);
// var_dump($comment);
// var_dump($estrellas);
// var_dump($photo);

// if($tipo_photo == "image/jpg" || $tipo_photo == "image/jpeg" || $tipo_photo == "image/png"){
//     if(!is_dir('img/upload')){
//         mkdir('img/upload', 0777);
//     }

//     move_uploaded_file($photo, 'img/upload/'.$nom_photo);

//     header("Refresh: 5; URL=index.php");
//     echo "<h1>Imagen subida correctamente </h1>";
// }

$query = $db->prepare('INSERT INTO testimonio (id, foto, comentario, nombre, estrellas ) VALUE (null, :foto, :comentario, :nombre, :estrellas)');
$query->execute([
    'foto' => 'usuario',
    'comentario' => $comment,
    'nombre' => $name,
    'estrellas' => $estrellas
]);

header("Location: ../index.php");