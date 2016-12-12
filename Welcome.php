<html>

<head>
<title>Onze website</title>

<link rel="stylesheet" type="text/css" href="css.css" media="screen" />
<link rel="stylesheet" href="C:\Users\Mitch\Desktop\Informatie Uitwisseling\Web opdracht\Webopdracht-IUW/css/font-awesome.min.css">
</head>

<div ID="nav">
 <table>
  <tr>
    <th><a href="index.html" title=""><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></th>
    <th><a href="contact.html" title=""><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Contact</a></th> 
    <th><a href="formulier.html" title=""><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Formulier</a></th>
	<th><a href="dummypagina2.html" title=""><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Dummypagina</a></th>
  </tr>
 </table>
</div>

<body>

Welkom op onze site, <?php echo $_POST["name"]! ;?> <br>
We nemen zo snel mogelijk contact met je op onder het volgende email adres: <?php echo $_POST["email"]; ?> <br>

<?php
$myfile = fopen(<php echo $_POST[naam];>, w) or die("unable to open file!");
$txt = "neem contact op met <?php echo $_POST[naam];>? via <?php echo $_POST[email];>?";
fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
$to = <php echo $_POST[email];>;
$subject = "contactformulier Appelsap United site";
$txt = "Dank voor het contact opnemen, <php echo $_POST[name];>;. We zullen zo spoedig mogelijk contact opnemen via <php echo $_POST[email];>";
$headers = "From webmaster@UU.nl";
mail($to,$subject,$txt,$headers);
?>


<div ID="footer">
<table>
		 
		 <tr>
		 <th> <a href="http://www.w3.org/standards/webdesign/htmlcss.html"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; W3C </a> </td>
		 <th> <a href="https://www.uu.nl/"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Universiteit Utrecht </a> </td>
		 </tr>
		
		 </table>	 



</body>
</html>