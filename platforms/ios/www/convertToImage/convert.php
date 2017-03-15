<?php
$path= 'PNG_transparency_demonstration_2.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
echo "<img src='$base64'>";