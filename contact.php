<!DOCTYPE html>
<html lang="en">
<body>

<?php include('./components/head.php');
      include('./components/nav.php');
     
?>

<? php 

if (isset($_POST ['submit'])) {

    $name = htmlspecialchars($_POST(['name'])); 
    $email = htmlspecialchars($_POST(['email'])); 
    $message = htmlspecialchars($_POST(['message']));

    echo $name . ", " . $email . ", " . $message;
}
?>

      <main>
      <h3>Contact Form</h3>

        <div class="contact">
            <form action="./contact.php" method="POST">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email..">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div> 
             
      </main>

     <?php include('./components/footer.php'); ?>

</body>
</html>