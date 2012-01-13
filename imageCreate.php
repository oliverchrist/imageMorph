<!doctype html> 
<html lang="de">
<head>
    <title>image Morph</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/screen.css" media="screen" />
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <style>
<?php
#$imagePath = 'banner.gif';
$imagePath = 'bullet100.gif';

$img = imagecreatefromgif($imagePath);
$imageSize = getimagesize($imagePath);
$imageWidth = $imageSize[0];
$imageHeight = $imageSize[1];
for($index = 0; $index < 256; $index++){
    $rgb = imagecolorsforindex($img ,$index);
    if($rgb){
        echo '.idx' . $index . '{background:rgba(' . $rgb['red'] . ',' . $rgb['green'] . ',' . $rgb['blue'] . ',1);}' . "\n";
    }
}        
?>
    </style> 
    <script>
        var indexCount = <?=$index?>;
    </script>
</head>
    <body>
    <?php
    //var_dump($imageSize);
    echo '<div id="size">Imagesize '.$imageWidth.' x '.$imageHeight.'</div>';
    echo '<div class="box">';
    for($y = 0; $y < $imageHeight; $y++){
        for($x = 0; $x < $imageWidth; $x++){
            $index = imagecolorat($img, $x, $y);
            echo '<div class="idx' . $index . '" style="left:'.$x.'px;top:'.$y.'px"></div>';
        }
    }
    echo '</box>';
    
    #imagegif($img);
    imagedestroy($img);
    ?>
    </body>
</html>