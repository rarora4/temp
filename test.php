<?php
// the $_POST[] array will contain the passed in filename and data
// the directory "data" is writable by the server (chmod 777)
$filename = "/var/www/html/crsd/data/".$_POST['filename'];
$data = $_POST['filedata'];

// write the file to disk
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, $data);
fclose($myfile);
?>
