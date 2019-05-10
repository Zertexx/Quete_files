<?php
require 'upload.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laisse pas trainer ton file</title>
</head>
<body>
<div class="container">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple">
        <input type="submit" value="Envoyer">
    </form>
    <div class="container">
        <div class="col-xs-6 col-md-3">
            <?php
            $dir    = 'upload/';
            $files1 = scandir($dir, 1);
            foreach ($files1 as $key => $image){
                if ($image != '.' && $image != '..'){
                    ?>
                    <img src="<?= $dir . $image ?>" alt="" class="img-thumbnail">
                    <p><?= $image?></p>

                    <a href="delete.php?delete=<?= $image ?>" class="btn btn-primary" >Supprimer</a>


                <?php } } ?>

        </div>
    </div>
</body>
</html>