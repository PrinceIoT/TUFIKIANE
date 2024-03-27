<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $org_name = htmlspecialchars($_POST['org_name']);
   $org_address = htmlspecialchars($_POST['org_address']);
   
   //$org_name =  mysqli_real_escape_string($conn, $_POST['org_name']) ;
  // $org_address =  mysqli_real_escape_string($conn, $_POST['org_address']) ;

   $select = "SELECT * FROM user_form1 WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'User already exists!';
   }else{
      if($pass != $cpass){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO user_form1(name, email, password, user_type, org_name, org_address) VALUES('$name','$email','$pass','$user_type','$org_name','$org_address')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="cssl/style.css">
</head>
<body>
<!--Header -->




<div class="form-container">
   <form action="" method="post">
      <h3>Register Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type" id="user_type_select">
         <!--<option value="user">user</option>-->
         <!--<option value="admin">admin</option>-->
         <option value="donor">donor</option>
         <option value="recipient">recipient</option>

        <!-- <option value="admin">admin</option> -->
        <!-- <option value="user">user</option> -->
      </select>
      <div id="org_fields" style="display:none;">
         <input type="text" name="org_name" placeholder="Organization Name">
         <input type="text" name="org_address" placeholder="Organization Address">
      </div>
      <input type="submit" name="submit" value="Register Now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">Login Now</a></p>
   </form>
</div>

<script>
   // JavaScript to toggle visibility of organization fields based on user selection
   document.getElementById("user_type_select").addEventListener("change", function() {
      var orgFields = document.getElementById("org_fields");
      if (this.value === "recipient") {
         orgFields.style.display = "block";
      } else {
         orgFields.style.display = "none";
      }
   });
</script>

</body>
</html>
