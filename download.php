<?php
$file_url = 'Patrick_TuGlynn_Resume_2024.pdf';
header('Content-Type: application/pdf');
header("Content-disposition: attachment; filename=\"" . 'Patrick_TuGlynns_Resume.pdf' . "\""); 
readfile($file_url);
?>