<?php


header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo "<b>My first document</b>";
echo '<div style="color:#33aa66;">Hernancete</div>';
echo "</body>";
echo "</html>";


?>