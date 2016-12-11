<html>
<body> 

<?php
$myfile = fopen(<php echo $_POST[naam];>, w) or die("unable to open file!");
$txt = "neem contact op met <?php echo $_POST[naam];?> via <?php echo $_POST[email];?>";
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>