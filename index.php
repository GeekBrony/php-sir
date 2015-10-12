<?php
/* "Simple Image Randomizer" by GeekBrony @ 10/12/15
a very simple PHP script to randomly select an image
from the files defined and redirect to the image. */

// Please refer to config.php to change the images.
define('config_pass', TRUE);
include_once(__DIR__."/config.php");

$numberOfImages = count($images);
// Add a max number value. Subtract 1 from the number of images because 0 is included as a number, too.
$maxNumber = $numberOfImages - 1;
$randomNumber = rand(0, $maxNumber);
header('Location: '.$images[$randomNumber]);
?>
