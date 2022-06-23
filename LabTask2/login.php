<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LogIn</title>
  </head>
  <body>
  <?php
    $name = $password = "";
    $nameErr = $passwordErr = "";


  if (isset($_POST["submit"])) {
        $error = false;
        if (empty($_POST["name"])) {
          $nameErr = "username is required";
          $error = true;
        }

        else if(strlen($_POST["name"]) < 4){
            $nameErr = 'username must have at least two characters';
            $error = true;
        }
  if(empty($_POST["password"]))
   {
     $passwordErr = "password is required";
     $error = true;
   }
   else if(strlen($_POST["password"]) < 8){
       $passwordErr = "Password must be atleast eight characters long";
       $error = true;
   }
   if($error == false)
   {
     echo "<span style='color : green'>Login Successful !!!</span>";
   }
}
   ?>

    <form action="#" method="post">
      <fieldset>
      <legend>Login</legend>
        <label>Username</label>
        <input type="text" name="name"><span style="color : red;"> <?php echo $nameErr; ?></span> <br> <br>
        <label>Password</label>
        <input type="password" name="password"><span style ="color : red;"> <?php echo $passwordErr ?></span><br> <br>
        <input type="checkbox" id="remember" name="remember" value=""> Remember me <br><br>

        <input type="submit" name="submit" value="Submit">
      </fieldset>

    </form>
  </body>
