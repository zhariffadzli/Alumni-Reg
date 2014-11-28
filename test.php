<html>
 <head>
 	<title> Testing </title>
 </head>

 <body>
 
 <?php
 $file="./option.txt";
 $fh = fopen($file, 'r');
 $option = fread($fh,filesize($file));
 fclose($fh);

 if ($option == 'YES') {
 	header('Location: ./Alumni/index.htm');
 } else {
 	header('Location: ./Admin/maintenance/index.html');
 }
 
?>

 </body>
 </html>