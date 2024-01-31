
<div class="footer">

    <a href="index.php">Home</a>
     <a href="contact.php">Contact</a>
   
<?php

// prints the copyright
?>

<p>&copy; <?php 

echo date("Y"); ?>

Design by Darbs</p>

<?php 

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");

?>
</div>