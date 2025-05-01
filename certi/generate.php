<?php
require_once('./dompdf/autoload.inc.php');
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->set_option('isRemoteEnabled', true); // Enable remote content loading
$dompdf->set_option('isHtml5ParserEnabled', true);
$dompdf->set_option('isCssFloatEnabled', true);
$dompdf->set_option('isFontSubsettingEnabled', true);

$template = file_get_contents('certificate_template.php');

// Embed images as base64
function embedImageBase64($html, $imagePath) {
    if (file_exists($imagePath)) {
        $imageData = base64_encode(file_get_contents($imagePath));
        $imageInfo = getimagesize($imagePath);
        $src = 'data:' . $imageInfo['mime'] . ';base64,' . $imageData;
        $html = str_replace($imagePath, $src, $html);
    }
    return $html;
}

// List of images to embed
$images = ['rmc.png', 'ie.png', 'ECOlet_rm.png', 'ssip.png', 'eco.png'];

// Embed each image
foreach ($images as $img) {
    $template = embedImageBase64($template, $img);
}

$dompdf->loadHtml($template);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

$dompdf->stream("ECertificate.pdf", ["Attachment" => false]);
exit;
?>
