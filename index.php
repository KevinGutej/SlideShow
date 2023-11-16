<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background-color: black;
            margin: 0;
            padding: 0;
        }

        .galleryContainer {
            max-width: 800px;
            margin: 50px auto;
        }

        .slideshowContainer {
            position: relative;
            max-width: 100%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="galleryContainer">
        <div class="slideshowContainer">
            <?php
            $imageDirectory = 'images/'; //CREATE A FOLDER AND ADD IMAGES

            $images = glob($imageDirectory . '*.{jpg}', GLOB_BRACE);

            foreach ($images as $index => $image) {
                echo "<div class='mySlides'>";
                echo "<img src='$image' style='width:100%;'>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    </div>
    </div>
</body>

</html>