<?php
$to = <php echo $_POST[email];>;
$subject = "contactformulier Appelsap United site";
$txt = "Dank voor het contact opnemen, <php echo $_POST[name];>. We zullen zo spoedig mogelijk contact opnemen via <php echo $_POST[email];>";
$headers = "From webmaster@UU.nl";
mail($to,$subject,$txt,$headers);
?>
