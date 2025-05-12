<?php
require_once __DIR__ . '/vendor/autoload.php'; // Load mPDF

use Mpdf\Mpdf;

$name = $_GET['name'] ?? 'Neel';
$score = $_GET['score'] ?? '10';

// Start output buffering
ob_start();

// Load HTML content from the template
include 'template.php';

// Get buffered content
$html = ob_get_clean();

// Create PDF in landscape mode (A4-L)
$mpdf = new Mpdf(['orientation' => 'L']); // 'L' = Landscape, 'P' = Portrait

$mpdf->WriteHTML($html);

$filename = preg_replace('/[^a-zA-Z0-9_-]/', '_', $name) . '.pdf'; // Sanitize username for filename
$mpdf->Output($filename, 'I'); // View in browser with dynamic filename
