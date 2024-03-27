<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>recipient page</title>

   
   <link rel="stylesheet" href="cssl/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>recipient</span></h3>
      <h1>welcome <span><php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is a recipient page</p>

      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>
-->

     <!-- <a href="login_form.php" class="btn">login</a> -->
      <!--<a href="register_form.php" class="btn">register</a>-->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Recipient page</title>

   <link rel="stylesheet" href="recipient.css">

</head>
<body>

<div class="header">
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="welcome-message">
    <p>Hello. Welcome to our page. Sign up to receive donations for your organization.</p>
</div>

<div class="recipient-form-container">
    <h2>Recipient Sign-up Form</h2>
    <form action="process_form1.php" method="post" class="recipient-form">
        <label for="organization">Organization Name:</label>
        <input type="text" id="organization" name="organization" required>

        <label for="address">Organization Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="items">Items in Need:</label>
        <textarea id="items" name="items" rows="4" required></textarea>

        <label for="description">Organization Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

<!-- Thank you -->
<div class="thank-you">
    <p>Thank you for signing up!</p>
</div>

</body>
</html>

