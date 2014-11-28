<html>
 <head>
  <title> Website Status </title>
 </head>

 <body>

 <center>
 <?php
 //no errors are reported
 error_reporting(0);

 // set file to read
 $filename = "option.txt";

 $newdata = $_POST['status'];

 // Checks if the checkbox has been left blank
 // If it has then then script dies and reloads
 if ($data = ''){
 	die ('Checkbox has null value');
 }

 if ($newdata != ''){

 //open file
 $fw = fopen($filename, 'w') or die('could open file!');
 // write to file
 // added stripslashes to $newdata
 $fb = fwrite($fw, stripslashes($newdata)) or die('Could not write 
 to file');
 // close file
 fclose($fw);
 }

 // open file
   $fh = fopen($filename, "r") or die("Could not open file!");

 // read file contents
   $data = fread($fh, filesize($filename)) or die("Could not read file!");

 // close file
   fclose($fh);

 // print file contents
   echo "Administration File <p>
   <form action='$_SERVER[SCRIPT_NAME]' method= 'POST' >
     <select name='status' style='width:70px'>
       <option value=''></option>
       <option value='YES'>YES</option>
       <option value='NO'>NO</option>
      </select>
       <!-- Button confirmation for offline status -->
      <input type='submit' name='change' value='Toggle Site Status'>
      <input type='hidden' name='changed' value='True'>
      </form> ";
?>

Is the website online: <?php include "./option.txt"; ?>
<br>
<a href="./test.php" target="_blank">Test the script</a>
  </center>

 </body>
 </html>