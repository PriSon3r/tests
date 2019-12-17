<?php 
    require_once 'photoGallery.php';

    $photoGallery = new PhotoGallery;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Task2. PhotoGallery</title>
</head>
<body>
    
    <h1>Task2. PhotoGallery</h1>

    <div class="album main_block">
    <?php foreach($photoGallery->getAlbumList('gallery') as $key => $category) : ?>
            <div class="albumList">
                <img class="img" width="150px" src="gallery/<?= $category;?>">
                <button class="openAlbum" width="150px" alt="gallery/<?= $category;?>">Смотреть <?= $key+1;?> альбом</button>
            </div>
    <?php endforeach; ?>
    </div>

    <br>

    <div>
        <h2><?= $_GET['currentAlbum'] ?></h2>
        <?php foreach($photoGallery->getAlbum($_GET['currentAlbum'] ?? 'gallery/album1') as $image) : ?> 
            <div class="imageItem" >
            <img class="img" width="350px" src="<?= $_GET['currentAlbum'] ?? 'gallery/album1';?>/<?= $image;?>">
            </div>
            <br>
        <?php endforeach; ?>
    </div>

</body>
</html>

<script src="main.js"></script>