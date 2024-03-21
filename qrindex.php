<?php
require_once 'phpqrcode/qrlib.php';

// Folder to save qrcode images
$path = 'qrimages/';
if (!is_dir($path)) {
    mkdir($path);
}

// Filename
$file = $path.date("Y-m-d-h-i-s").'.png';

// Our text: here we will use concat
$text = "Try and See\n";
$text .= "Next i will improve this project\n";
$text .= "we will take inputs from user and make QRCode\n";
$text .= "Thanks for watching :)";

// Lets create
QRcode::png($text, $file, 'H', 2, 2);

// Lets echo the image
echo '<img src="'.$file.'">';