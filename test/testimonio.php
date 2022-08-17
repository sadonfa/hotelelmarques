<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_test.css">
    <title>Testiomonio</title>
</head>
<body>
<div class="single-testimonial">
    <h3>Comentario</h3>
    <form  method="POST" action="valoracion.php" enctype="multipart/form-data">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="">
        <label for="comment">Comentario</label>
        <textarea name="comment" id="" cols="30" rows="10"></textarea>        
        <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5"><!--
            --><label for="radio1">&#9733; </label><!--
            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
            --><label for="radio2">&#9733; </label><!--
            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
            --><label for="radio3">&#9733; </label><!--
            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
            --><label for="radio4">&#9733; </label><!--
            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
            --><label for="radio5">&#9733; </label>
        </p>
        <!-- <label for="photo">foto</label>
        <input type="file" name="photo" id=""> -->
        <input type="submit" value="Enviar">
    </form>
</div>
    
</body>
</html>