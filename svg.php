<?php
date_default_timezone_set('UTC');
$heure = date('d_m_Y_H_i_s');
if (isset($_POST['svg_content'])){
     $imageData=$_POST['svg_content'];
     $filteredData=substr($imageData, strpos($imageData, ",")+1);
     $unencodedData=base64_decode($filteredData);
     $fp = fopen('images/art_'.$heure.'.png', 'wb' );
     fwrite( $fp, $unencodedData);
     fclose( $fp );
}
?>
