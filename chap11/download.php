<?php
$fl = $_GET['path'];
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachmen; filename = "' . $fl . '"');
